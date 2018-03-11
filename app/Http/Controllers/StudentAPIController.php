<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentAPIController extends Controller
{

   /* students details*/
    public function index()
	{
	    $student = Student::paginate(10);

        if (!$student) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $student,
            200
        );
	}

    
	public function show(Student $student)
	{
	     return $student;
	}

    
	public function store(Request $request)
	{
		$student = Student::create($request->all());

		return response()->json($student, 201);
	}
    //student update
	public function update(Request $request, Student $student)
	{
		$student->update($request->all());

		return response()->json($student, 200);
	}

    //delete student id
	public function delete(Student $student)
	{
		$student->delete();

		return response()->json(null, 204);
	}
}
