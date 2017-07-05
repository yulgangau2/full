<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $teachers =  App\Teacher::all();
        return view('teacher.index',[
            'teachers' => $teachers
        ]);
    }

    public function showTeacherView()
    {
        $user = Auth::user();
        return view('teacher.index2',[
            'auth' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new App\Teacher;
        $teacher->name = $request->name;
        $teacher->save();
        return redirect('teacher');
    }

    public  function addSubject ($id)
    {
        $subjects = App\Subject::all();

        return view('teacher.addsubject',[
            'subjects' => $subjects,
            'id' => $id
        ]);
    }

    public  function addSubjectStore (Request $request)
    {
        $teacher = App\Teacher::find($request->id);
        $teacher->subject()->attach($request->subject_id);
        return redirect('teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $teacher = App\Teacher::find($id);
        return  response()->json([
            'id' => $teacher->id,
            'name' => $teacher->name,
            'LastName' => 'D Ja '
        ]);
    }

    public  function listAll()
    {
        $teachers = App\Teacher::all();
        return response()->json([
            'list' => $teachers
        ]);
    }

    public function  viewSubject ($id)
    {
        $subjects = App\Teacher::with('subject')->where('id','=',$id)->get();
        return view('teacher.viewsubject',[
            'subjects' => $subjects
        ]);
    }

    public function  viewClass($id)
    {
        $classes = App\Teacher::with('classes')->where('id','=',$id)->get();
        return view('teacher.viewclass',[
            'classes' => $classes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = App\Teacher::find($id);
        return view('teacher.edit',[
            'teacher' => $teacher
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = App\Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->save();
        return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = App\Teacher::destroy($id);
        return redirect('teacher');
    }
}
