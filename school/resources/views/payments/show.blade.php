@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrolment No : {{ $payments->enrol_no }}</h5>
        {{-- retrieves the name of the course from the course model,courtesy of the course() method within the batch model --}}
        <p class="card-text">Paid Date: {{ $payments->paid_date }}</p>
        <p class="card-text">Amount: {{ $payments->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection