<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index()
    {
      $students =student::orderBy('id')->get();
      return view('student',compact('students'));
    }
    public function store(Request $request)
    {
      $request->validate([
          'name'          => 'required',
          'email'         => 'required',
          'num1' => 'required',
        ],
          [
            'name.required'=>'please enter the name field',
            'email.required'=>'please enter the email field',
            'num1.required'=>'please enter the number field',
      ]);
      // dd($request);

      $students = new student;
      $students->name = $request->input('name');
      $students->email = $request->input('email');
      $students->phone = $request->input('num1');
      $students->save();
      return response()->json($students);
    }
    public function getStudentById($id)
    {
      $students = Student::find($id);

      return response()->json($students);
    }
    public function updataStudent(Request $request)
    {
      $students = student::find($request->id);
      $students->name = $request->input('name');
      $students->email = $request->input('email');
      $students->phone = $request->input('num1');
      $students->save();
      return response()->json($students);
    }

    public function deleteStudent($id)
   {
     $students = Student::find($id);
     $students->delete();
     return response()->json(['success' => 'Record has been deleted']);

   }
}
