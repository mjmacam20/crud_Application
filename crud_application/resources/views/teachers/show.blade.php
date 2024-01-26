@extends('teachers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Age : {{ $teachers->age }}</p>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Subject : {{ $teachers->subject }}</p>
        <p class="card-text">Course : {{ $teachers->course }}</p>
        <div class="text-center">
                <a href="{{ url('teacher') }}" class="btn btn-secondary">Back</a>
            </div>
  </div>
    </hr>
  </div>
</div>