<?php

namespace Dev\Infrastructure\Repository;

use Dev\Infrastructure\Model\User;
use Dev\Infrastructure\Repository\Abstracts\AbstractRepository;

class UserRepository extends AbstractRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}