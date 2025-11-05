@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $enrollments->name }}</h5>
        <p class="card-text">Enroll no : {{ $enrollments->Enroll_no }}</p>
        <p class="card-text">Batch : {{ $enrollments->Batch_id }}</p>
        <p class="card-text">Student : {{ $enrollments->Student_id }}</p>
        <p class="card-text">join data : {{ $enrollments->Join_Date }}</p>
        <p class="card-text">fee : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection

