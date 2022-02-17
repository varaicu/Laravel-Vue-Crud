<?php

namespace Dev\Domain\Service;

use Dev\Infrastructure\Repository\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function updatePassword(int $userId, string $password)
    {
        $user = $this->userRepository->findOrFail($userId);
        $user->update([
            'password' => $password
        ]);
        return $user->refresh();
    }

    public function updateProfilePicture(int $userId, string $path)
    {
        $user = $this->userRepository->findOrFail($userId);
        $user->update([
            'photo' => $path
        ]);
        return $user->refresh();
    }
}