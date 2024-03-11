@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course</label></br>
        {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br> --}}
        <select name="course_id" id="course_id">
          {{-- loop over an iterative array with id's and names --}}
          @foreach ($courses as $id=>$name )
            <option value="{{$id}}">
              {{ $name }}
            </option>

          @endforeach
        </select>
        <br><br>
        <label>Start date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop