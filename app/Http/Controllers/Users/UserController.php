<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
        {
            $users = User::with('course')->orderBy('id', 'desc')->paginate(12);
            // dd($users);
            return view('users.index', compact('users'));
        }

    public function create()
        {
            return view('users.create')->with('course' , Course::all());
        }


    public function store(Request $req)
        {
            $users = new User();
            $users->name =$req->post('name');
            $users->email =$req->post('email');
            $users->phone =$req->post('phone');
            $users->course_id =$req->post('course_id');
            $users->save();
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
            dd($id);
            $users = User::find($id);
            $users->delete();
            return response()->json([
                'message' => 'Data deleted successfully!'
      ]);
        }
}
