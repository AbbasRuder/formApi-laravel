<?php

namespace App\Http\Controllers\API;

use App\Models\Course;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Category $category)
    {
        $courses = $category->courses;

        return response()->json($courses);
    }
}
