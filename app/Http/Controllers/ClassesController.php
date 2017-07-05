<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = App\Classes::all();

        return view('class.index', [
            'classes' => $classes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = App\teacher::all();
        $subjects = App\Subject::all();
        return view('class.insert', [
            'teachers' => $teachers,
            'subjects' => $subjects
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new App\Classes;
        $class->name = $request->name;
        $class->teacher_id = $request->teacher_id;
        $class->subject_id = $request->subject_id;
        $class->save();
        return redirect('classes');
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
        $class = App\Classes::find($id);
        return view('class.edit', [
            'class' => $class
        ]);

    }

    public function summary($id)
    {
        $class = App\Classes::with('student')->where('id','=',$id)->get();
        return view('class.viewstudent',[
            'summarys' => $class
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        $class = App\Classes::find($id);
        $class->name = $request->name;
        $class->save();
        return redirect('classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $class = App\Classes::destroy($id);
        return redirect('classes');
    }
}
