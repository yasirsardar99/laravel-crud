<?php

namespace App\Http\Controllers;

use App\Models\unistudent;
use Illuminate\Http\Request;

class UnistudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $unistudent =unistudent::get();
      return view('unistudent.index', compact('unistudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unistudent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=[
        'name'=>$request->name,
         'section'=>$request->section,
         'course'=>$request->course,
         'email'=>$request->email,
        'category'=>$request->category

       ];



       unistudent::create($data);
        return redirect('unistudent')->with('status', 'student data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unistudent  $unistudent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $unistudent = unistudent::find($id);
        return view('unistudent.show', compact('unistudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unistudent  $unistudent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unistudent = unistudent::find($id);
     return view('unistudent.edit', compact('unistudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unistudent  $unistudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unistudent = unistudent::where('id',$id)->get()->first();
        $unistudent->update([
            'name'=>$request->name,
             'section'=>$request->section,
             'course'=>$request->course,
             'email'=>$request->email,
           ]);
        return redirect('unistudent')->with('status', 'student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unistudent  $unistudent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unistudent = unistudent::where('id',$id)->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
}
