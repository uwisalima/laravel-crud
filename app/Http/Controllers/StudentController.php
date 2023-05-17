<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view()
        return view('student.createstudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "names" => "required|min:3",
            "regno" => "required|min:9|max:9",
            "email" => "required|email",
            "phone" => "required|min:10"
        ]);

        Student::create([
            "name" => $request->names,
            "regnumber" => $request->regno,
            "email" => $request->email,
            "phonenumber" => $request->phone
        ]);
        return redirect()->route('home')->with("success","student inserted successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {

        return view('student.edit',["student"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            "names" => "required|min:3",
            "regno" => "required|min:9|max:9",
            "email" => "required|email",
            "phone" => "required|min:10"
        ]);

        $student->update([
            "name" => $request->names,
            "regnumber" => $request->regno,
            "email" => $request->email,
            "phonenumber" => $request->phone
        ]);
        return redirect()->route('home')->with("success","data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('home')->with("success","data deleted successfully");
    }
}
