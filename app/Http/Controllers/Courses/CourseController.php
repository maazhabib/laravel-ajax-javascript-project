<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
        {
            return view('course.index')->with('course_data' , Course::all());
        }


    public function create()
        {
            return view('course.create');
        }


    public function store(Request $request)
        {
            //
        }



    public function show($id)
        {
            //
        }

    public function edit($id)
        {
            //
        }


    public function update(Request $request, $id)
        {
            //
        }


    public function destroy($id)
        {
            //
        }
}
