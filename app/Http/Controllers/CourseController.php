<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::query()
            ->select(['id', 'code', 'name', 'lecturer'])
            ->orderBy('code')
            ->get();

        return view('courses.index', compact('courses'));
    }
}