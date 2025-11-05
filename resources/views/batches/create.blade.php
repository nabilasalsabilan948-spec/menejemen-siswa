@extends('layout')

@section('content')
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        
        {{-- Nama Batch --}}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        {{-- Course Dropdown --}}
        <label>Course Name</label></br>
        <select name="course_id" id="course_id" class="form-control select2">
            <option value="">-- Pilih Course --</option>
            @foreach ($courses as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select></br>

        {{-- Start Date --}}
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success">
      </form>
  </div>
</div>

{{-- Tambahkan Script Select2 --}}
{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- Select2 --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- Aktifkan Select2 --}}
<script>
    $(document).ready(function() {
        $('#course_id').select2({
            placeholder: "Pilih Course...",
            allowClear: true
        });
    });
</script>
@stop
