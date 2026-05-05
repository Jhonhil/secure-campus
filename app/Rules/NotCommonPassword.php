<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;

class NotCommonPassword implements ValidationRule
{
    private static ?array $passwords = null;

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $password = Str::lower(trim((string) $value));

        if (isset($this->passwords()[$password])) {
            $fail('Password terlalu umum dan mudah ditebak. Gunakan password yang lebih panjang dan unik.');
        }
    }

    private function passwords(): array
    {
        if (self::$passwords !== null) {
            return self::$passwords;
        }

        $path = resource_path('security/common-passwords.txt');

        if (!file_exists($path)) {
            return self::$passwords = [];
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];

        $passwords = [];

        foreach ($lines as $line) {
            $passwords[Str::lower(trim($line))] = true;
        }

        return self::$passwords = $passwords;
    }
}