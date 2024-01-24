<?php

namespace App\Enums;

enum UserStatus: string
{
    case UNVERIFIED = 'unverified';
    case ACTIVE = 'active';
    case SUSPENDED = 'suspended';
    case BANNED = 'banned';

	public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
