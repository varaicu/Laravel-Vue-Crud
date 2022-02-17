<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\UserResource;
use Dev\Domain\Service\UserService;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(AuthRequest $request)
    {
        $userData = $request->validated();
        $userData['password'] = Hash::make($userData['password']);
        $userData['phone_verified_at'] = now();
        $user = $this->userService->create($userData);
        $user->refresh();
        return new UserResource($user);
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->validated();
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => __('invalid_credentials')], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => __('could_not_create_token')], 500);
        }
        $authUser = auth()->user();
        return (new UserResource($authUser))->additional([
            'data' => [
                'token' => $token
            ]
        ]);
    }

    public function refresh() {
        $token = auth()->refresh();
        $authUser = auth()->user();
        return (new UserResource($authUser))->additional([
            'data' => [
                'token' => $token
            ]
        ]);
    }

}