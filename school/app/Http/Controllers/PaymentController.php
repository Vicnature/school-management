<?php

namespace App\Http\Controllers;

use App\Models\Enrolment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Payment;
use Illuminate\View\view;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payments=Payment::all();
        return view('payments.index')->with('payments',$payments);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $enrolments=Enrolment::pluck('enrol_no','id');
        return view('payments.create',compact('enrolments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'payment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $payment = Payment::find($id);
        return view('payments.show')->with('payments', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $payment = Payment::find($id);
        return view('payments.edit',compact('payments','enrolments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payments')->with('flash_message', 'payment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'payment deleted!'); 
    }
}
