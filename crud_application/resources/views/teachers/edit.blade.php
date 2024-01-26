@extends('teachers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Teachers</div>
  <div class="card-body">
       
      <form action="{{ url('teacher/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" required />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control" required></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$teachers->age}}" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control" required></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" value="{{$teachers->department}}" class="form-control" required></br>
        <div class="text-center">
                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{ url('teacher') }}" class="btn btn-secondary">Back</a>
            </div>
    </form>
    
  </div>
</div>
  
@stop