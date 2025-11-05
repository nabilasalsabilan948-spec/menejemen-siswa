@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add New Payment</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment</label></br>
        <select name="enrollment_id" class="form-control" required>
            @foreach($enrollments as $enroll)
                <option value="{{ $enroll->id }}">{{ $enroll->enroll_no }}</option>
            @endforeach
        </select></br>

        <label>Paid Date</label></br>
        <input type="date" name="paid_date" class="form-control" required></br>

        <label>Amount</label></br>
        <input type="number" name="amount" class="form-control" required></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
   
  </div>
</div>
 
@stop
