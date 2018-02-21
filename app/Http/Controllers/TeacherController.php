<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Teacher;
use App\Classroom;
use App\Level;
use App\User;
use Auth;
use Validator;

class TeacherController extends Controller
{

    public function __construct()
    {

           $this->middleware('role:Admin')->except('create', 'store');              
        
    }

    public function index()
    {
        #displaying all teachers
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $classrooms = Classroom::all();

        $levels = Level::all();

        return view('teachers.create', compact(['classrooms', 'levels']));
    }

    public function store()
    {

        $teacher = Teacher::create(request(['name','gender', 'classroom_id', 'level_id', 'experience', 'phone']));

        User::create([
            'name' => $teacher->name,
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'userable_id' => $teacher->id,
            'userable_type' => 'Teacher'
        ]);


        if (Auth::check() && Auth::user()->hasRole('Admin')) {
            return redirect('/teachers');
        }
        
        return redirect('login');
        
    }

    public function show(Teacher $teacher)
    {
        
    }

    public function edit(Teacher $teacher)
    {
        
        $classrooms = Classroom::all();

        return view('teachers.edit', compact('teacher', 'classrooms'));
    }

    public function update(Teacher $teacher)
    {
    

        $input = request(['name','experience', 'classroom_id']);

        $teacher->fill($input)->save();

        return redirect('/teachers');
    }

    public function destroy(Teacher $teacher)
    {

        $teacher->delete();

        return redirect('/teachers');


    }
}
