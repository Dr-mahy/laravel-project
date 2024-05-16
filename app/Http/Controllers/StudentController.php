<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Student;

class StudentController extends Controller
{
    private $columns=['name','age'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::get();
        return view('students',compact('students'));
    //     $students = DB::select('select * from student');
    //   return view('students',['student'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addstudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student=new student();
        // $student->name=$request->name;
        // $student->age=$request->age;
        // $student->save();
        // return "done";
        student::create($request->only($this->columns));
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=student::findOrFail($id);
        return view('showstudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=student::findOrFail($id);
        return view('editstudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        student::where('id',$id)->update($request->only($this->columns));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      student::where('id',$id)->delete();
      return redirect('students');
    }
}
