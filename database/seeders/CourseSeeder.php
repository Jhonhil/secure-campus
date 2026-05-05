<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'code' => 'SI101',
                'name' => 'Keamanan Sistem Informasi',
                'lecturer' => 'Erick Kurniawan',
            ],
            [
                'code' => 'SI102',
                'name' => 'Secure Coding',
                'lecturer' => 'Dosen Pengampu',
            ],
            [
                'code' => 'SI103',
                'name' => 'Aplikasi Web',
                'lecturer' => 'Dosen Pengampu',
            ],
        ];

        foreach ($courses as $course) {
            Course::firstOrCreate(
                ['code' => $course['code']],
                $course
            );
        }
    }
}