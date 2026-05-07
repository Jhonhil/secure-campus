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
            Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            new NotCommonPassword(),
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
