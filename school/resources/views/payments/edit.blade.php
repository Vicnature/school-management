@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">payment PAGE</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        
        <label>Enrolment No</label></br>  
        <select name="enrol_id" id="enrol_id">
          {{-- loop over an iterative array with id's and names --}}
          @foreach ($payments as $id=>$enrol_no )
            <option value="{{$id}}">
              {{ $enrol_no }}
            </option>
          @endforeach
        </select>

        <label>Paid Date</label></br>
        {{-- retrieves the name of the course from the course model,courtesy of the course() method within the batch model --}}
        <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop