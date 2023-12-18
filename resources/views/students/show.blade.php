@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>TAMPIL DATA MEMBER HOTEL THE GITS</h2></div>
    <div class="card-body">
        <table class="card-body">
            <div class="card-title">Name : <br> {{ $students->name }}</div>
            <div class="card-title">Birthday: <br> {{ $students->birthday }}</div>
            <div class="card-title">Address : <br> {{ $students->address }}</div>
        </table>
    </div>