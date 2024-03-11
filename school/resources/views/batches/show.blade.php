@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        {{-- retrieves the name of the course from the course model,courtesy of the course() method within the batch model --}}
        <p class="card-text">Course Name : {{ $batches->course->name }}</p>
        <p class="card-text">Start_date: {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection