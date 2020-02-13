<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all();
        return view('manager/student.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('manager/student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $request->validate([
            'name'=>'required',
            'card_code'=>'required',
            'location'=>'required',
            'parent_email'=>'required',
            'gender'=>'required'
        ]);
        $student = new Student();
  
        $student->name= $request->input('name');
        $student->card_code = $request->input('card_code');
        $student->location= $request->input('location');
        $student->parent_email = $request->input('parent_email');
        $student->gender = $request->input('gender');;
        $student->save(); 
        return redirect()->route('student.index')->with('info','student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $student = Student::find($id);
         return view('manager/student.edit',['student'=> $student]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'card_code'=>'required',
            'location'=>'required',
            'parent_email'=>'required',
            'gender'=>'required'
        ]);

        $student = Student::find($request->input('id'));
        $student->name= $request->input('name');
        $student->card_code = $request->input('card_code');
        $student->location= $request->input('location');
        $student->parent_email = $request->input('parent_email');
        $student->gender = $request->input('gender');;
        $student->update(); 
        return redirect()->route('student.index')->with('info','student Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        //delete
        $student->delete();
        return redirect()->route('student.index');
    }
}
