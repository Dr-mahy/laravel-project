<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
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
    //     $students = DB::select('select * from students');
    //   return view('students',['students'=>$students]);
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
        $data=$request->validate([
            'name'=>'required|max:100|min:5',
            'age'=>'required',
        ]);
        student::create($data);
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
      Student::where('id',$id)->delete();
      return redirect('students');
    }
     // trash
     public function trash()
     {
       $trashed=student::onlyTrashed()->get();
       return view('trashedstudents',compact('trashed'));
     }
        // restore trashed
    public function restore(string $id)
    {
        student::where('id',$id)->restore();
        return redirect('students');
    }
// forcedelete
    public function forcedelete(Request $request)
    {
       $id=$request->id;
        student::where('id',$id)->forceDelete();
        return redirect('trashstudents');
    }
}
