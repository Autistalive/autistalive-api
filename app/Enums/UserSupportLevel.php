<?php

namespace App\Enums;

enum UserSupportLevel: int
{
    case LIGHT = 1;
    case MODERATE = 2;
    case HIGH = 3;

	public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
