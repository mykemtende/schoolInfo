<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Subject;
use App\Level;
use App\Teacher;

class SubjectController extends Controller
{

    public function index()
    {
        

        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));



    }

    public function create()
    {

        $levels = Level::all(); 
        $teachers = Teacher::all(); 
        return view('subjects.create', compact('levels', 'teachers'));
    }

    public function store()
    {
    
        Subject::create(request(['name','level_id','teacher_id']));

        return redirect('/subjects');
    }

    public function show(Subject $subject)
    {
    
    }


    public function edit(Subject $subject)
    {
    
        return view('subjects.edit');
    }

    public function update(Subject $subject)
    {
    

        $input = request(['name','level_id','teacher_id']);

        $subject->fill($input)->save();

        return redirect('/subjects');
    }
     # deleting subject
    public function destroy(Subject $subject)
    {
    

        $subject->delete();

        return redirect('/subjects');


    }
}