<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = App\Subject::all();
        return view('subject.index',[
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new App\Subject;
        $subject->name = $request->name;
        $subject->save();
        return redirect('subject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = App\Subject::find($id);
        return view('subject.edit',[
            'subject' => $subject
        ]);
    }

    public function viewSubject($id)
    {
        $subjects = App\Subject::with('teacher')->where('id','=',$id)->get();
        return view('subject.viewsubject',[
            'subjects' =>$subjects
        ]);
    }

    public function viewClass($id)
    {
        $classess = App\Subject::with('classes')->where('id','=',$id)->get();
        return view('subject.viewclass',[
            'classes' => $classess
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
        $subject = App\Subject::find($id);
        $subject->name = $request->name;
        $subject->save();
        return redirect('subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = App\Subject::destroy($id);
        return redirect('subject');
    }
}
