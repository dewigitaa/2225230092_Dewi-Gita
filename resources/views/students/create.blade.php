@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2>TAMBAH DATA MEMBER HOTEL THE GITS</h2></div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Birthday</label></br>
        <input type="text" name="birthday" id="birthday" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn"></br>
    </form>
   
  </div>
</div>
 
@stop