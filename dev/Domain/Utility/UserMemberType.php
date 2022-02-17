<?php

namespace Dev\Domain\Utility;

class UserMemberType
{
    const MEMBER = 'member';

    public static function getTypes()
    {
        return [
            self::MEMBER
        ];
    }
}