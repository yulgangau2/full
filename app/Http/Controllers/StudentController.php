<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = App\Student::all();
        return view('student.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new App\Student;
        $student->name = $request->name;
        $student->save();
        return redirect('student');
    }

    public function addSubject($id)
    {
        $classes = App\Classes::with('teacher','subject')->get();
        //$classes = App\Classes::all();
        return view('student.addSubject', [
            'id' => $id,
            'classes' => $classes
        ]);
    }

    public function summary($id)
    {
        $result = App\Student::with('classes')->where('id','=',$id)->get();

        return view('student.summary',[
            'result' => $result,
            'id'     => $id
        ]);
    }

    public function addSubjectStore(Request $request)
    {
        $student = App\Student::find($request->id);
        $student->classes()->attach($request->class_id);
        return redirect('student');
    }

    public function dropSubject($stu_id ,$class_id)
    {

        $student = App\Student::find($stu_id);
        $student->classes()->detach($class_id);
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = App\Student::find($id);
        return view('student.edit',[
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = App\Student::find($id);
        $student->name = $request->name;
        $student->save();

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = App\Student::destroy($id);
        return redirect('student');
    }
}
