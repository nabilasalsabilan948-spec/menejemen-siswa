@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Payment</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <label>Enrollment</label></br>
        <select name="enrollment_id" class="form-control" required>
            @foreach($enrollments as $enroll)
                <option value="{{ $enroll->id }}" {{ $enroll->id == $payment->enrollment_id ? 'selected' : '' }}>
                    {{ $enroll->enroll_no }}
                </option>
            @endforeach
        </select></br>

        <label>Paid Date</label></br>
        <input type="date" name="paid_date" value="{{ $payment->paid_date }}" class="form-control" required></br>

        <label>Amount</label></br>
        <input type="number" name="amount" value="{{ $payment->amount }}" class="form-control" required></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
   
  </div>
</div>
 
@stop
