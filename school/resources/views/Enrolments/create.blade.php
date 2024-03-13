@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">enrolments Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrolments') }}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        <label>Enrol NO</label></br>
        <input type="text" name="enrol_no" id="enrol_no" class="form-control"></br>

        <label>Batch</label></br>
        <select name="batch_id" id="batch_id" class="form-control">
          @foreach ($batches as $id=>$name )
            <option value="{{ $id }}">
              {{$name}}
            </option>
          @endforeach
        </select>

        <br>
        <label>Student</label></br>
        {{-- <input type="text" name="student_id" id="student_id" class="form-control"></br> --}}

        <select name="student_id" id="student_id" class="form-control">
          @foreach ($students as $id=>$name )
            <option value="{{ $id }}">
              {{$name}}
            </option>
          @endforeach
        </select>
        <br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>

        <label>Fees</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop