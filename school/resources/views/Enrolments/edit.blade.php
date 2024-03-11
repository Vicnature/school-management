@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">EDIT PAGE</div>
  <div class="card-body">
      
      <form action="{{ url('enrolments/' .$enrolments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrolments->id}}" id="id" />

        <label>Enrol NO</label></br>
        <input type="text" name="enrol_no" id="enrol_no" class="form-control" value="{{$enrolments->enrol_no}}"></br>

        <label>Batch Id</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrolments->batch_id}}"></br>

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrolments->student_id}}"></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control" value="{{$enrolments->join_date}}"></br>

        <label>Fees</label></br>
        <input type="text" name="Fees" id="Fees" class="form-control" value="{{$enrolments->fee}}"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop