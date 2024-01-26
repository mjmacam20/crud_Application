@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Subject : {{ $students->subject }}</p>
        <p class="card-text">Course : {{ $students->course }}</p>
        <div class="text-center">
                <a href="{{ url('student') }}" class="btn btn-secondary">Back</a>
            </div>

  </div>
    </hr>
  </div>
</div>