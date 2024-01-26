@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control" required ></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control" required></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control" required></br>
        <div class="text-center">
                <input type="submit" value="Save" class="btn btn-success">
                <a href="{{ url('student') }}" class="btn btn-secondary">Back</a>
            </div>
    </form>   
  </div>
</div>

@stop