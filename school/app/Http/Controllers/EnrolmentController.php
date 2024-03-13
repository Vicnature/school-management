<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Enrolment;
use App\Models\Student;
use App\Models\Batch;
use Illuminate\View\view;

class EnrolmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $enrolments=Enrolment::all();
        return view('enrolments.index')->with('enrolments',$enrolments);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $batches=Batch::pluck('name','id');
        $students=Student::pluck('name','id');
        return view('enrolments.create',compact('batches','students'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Enrolment::create($input);
        return redirect('enrolments')->with('flash_message', 'enrolment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $enrolment = Enrolment::find($id);
        return view('enrolments.show')->with('enrolments', $enrolment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $enrolment = Enrolment::find($id);
        return view('enrolments.edit')->with('enrolments', $enrolment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $enrolment = Enrolment::find($id);
        $input = $request->all();
        $enrolment->update($input);
        return redirect('enrolments')->with('flash_message', 'enrolment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Enrolment::destroy($id);
        return redirect('enrolments')->with('flash_message', 'enrolment deleted!'); 
    }
}
