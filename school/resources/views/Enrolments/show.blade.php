@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">enrolments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrolment : {{ $enrolments->enrol_no }}</h5>
        <p class="card-text">Batch : {{ $enrolments->batch->name }}</p>
        <p class="card-text">Student {{ $enrolments->student->name }}</p>
        <p class="card-text">Join Date {{ $enrolments->join_date }}</p>
        <p class="card-text">Fees{{ $enrolments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection