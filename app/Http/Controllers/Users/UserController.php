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
            return view('users.create');
        }


    public function store(Request $req)
        {
            $this->validate(request(),
            [
                'name' =>'required',
                'email' =>'required',
                'phone' =>'required',
                'course' =>'required'
            ]);

                $todo = new User();
                $todo->name = $req['name'];
                $todo->email = $req['email'];
                $todo->phone = $req['phone'];
                $todo->course_id = $req['course'];
                $todo->save();
                return redirect()->route('user.index');
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
