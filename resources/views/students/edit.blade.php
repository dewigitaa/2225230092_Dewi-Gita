@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2>EDIT DATA MEMBER HOTEL THE GITS</h2></div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Birthday</label>
        <input type="text" name="birthday" id="birthday" value="{{$students->birthday}}" class="form-control"></br>
        <label>Address</label>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn"></br>
    </form>  
  </div>
</div>
 
@stop