<?php

namespace App\Support;

use App\Rules\NotCommonPassword;
use Illuminate\Validation\Rules\Password;

class PasswordRules
{
    public static function newPassword(bool $confirmed = true): array
    {
        $rules = [
            'required',
            'string',
            Password::min(10)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
            new NotCommonPassword,
        ];

        if ($confirmed) {
            $rules[] = 'confirmed';
        }

        return $rules;
    }

    public static function currentPassword(): array
    {
        return [
            'required',
            'current_password',
        ];
    }
}
