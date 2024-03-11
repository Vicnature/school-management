<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\view;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $batches=Batch::all();
        return view('batches.index')->with('batches',$batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //get the names and id's from the course model.
        //They are passed into the batches.create blade template.
        $courses=Course::pluck('name','id');
        return view('batches.create',compact('courses'));

        
        // return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //
        $batch = Batch::find($id);
        return view('batches.show')->with('batches', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //
        $batch = Batch::find($id);
        return view('batches.edit')->with('batches', $batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batches')->with('flash_message', 'batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'batch deleted!');
    }
}
