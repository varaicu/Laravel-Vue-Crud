<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $authUser = auth()->user();
        if (!$authUser) {
            return response()->json(['error' => 'Unauthorized']);
        }
//        try {
//            $user = JWTAuth::parseToken()->authenticate();
//        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $ex) {
//            return response()->json(['status' => 'Token is Invalid']);
//        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $ex) {
//            return response()->json(['status' => 'Token is Expired']);
//        } catch (Exception $e) {
//            return response()->json(['status' => 'Authorization Token not found']);
//        }
        return $next($request);
    }
}
