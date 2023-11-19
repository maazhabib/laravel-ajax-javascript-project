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


    public function store(Request $req)
        {
            // dd($req);
                $course = new Course();
                $course->cname =$req->post('name');
                $course->save();
                return redirect()->route('course.index');
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
            try {
                $course = Course::findOrFail($id);
                $course->delete();
                return response()->json([
                    'success' => 'Record has been deleted successfully!'
                ], 200);
            } catch (\Exception $exception) {
                $message = $exception->getMessage();
                if(str_contains($message, 'No query results for model')) {
                    $message = 'Course not found.';
                }
                return response()->json([
                    'error' => $message
                ], 400);
            }
        }
}
