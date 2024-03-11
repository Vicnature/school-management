@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">EDIT PAGE</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>BatchName</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
        <label>Course Name</label></br>
        {{-- retrieves the name of the course from the course model,courtesy of the course() method within the batch model --}}
        <input type="text" name="course_id" id="course_id" value="{{$batches->course->name}}" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop