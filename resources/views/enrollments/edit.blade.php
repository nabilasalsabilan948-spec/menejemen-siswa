@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">EditPage</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />

        <label>Enroll no</label></br>
        <input type="text" name="Enroll_no" id="Enroll_no" class="form-control" value="{{$enrollments->Enroll_no}}"></br>
        <label>Batch</label></br>
        <input type="text" name="Batch_id" id="Batch_id" class="form-control" value="{{$enrollments->Batch_id}}"></br>
        <label>Student</label></br>
        <input type="text" name="Student_id" id="Student_id" class="form-control" value="{{$enrollments->Student_id}}"></br>
        <label>Join Date</label></br>
        <input type="text" name="Join_Date" id="Join_Date" class="form-control" value="{{$enrollments->Join_Date}}"></br>
        <label>fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
