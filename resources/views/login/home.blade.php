@extends('layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Contact Form</div>
        <div class="card-body"> 
           <h2> Welcome !!!!!! </h2>
        </div>
    </div>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
@stop