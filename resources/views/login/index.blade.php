@extends('layout')
@section('content')
  
    <div class="d-flex justify-content-center align-items-center" style="height:100vh; ">
        <div class="card" style="width: 400px;" >
        <div class="card-header" style="background-color:#576e60;">Login Form</div>
        <div class="card-body" style="background-color:#145da6;"> 
            
        
            <form action= "{{ route('check') }}" method="post">
             {!! csrf_field() !!}   

            <label class="form-label text-white">Email</label>
            <input type="email" name="email" id="email" class ="form-control " > </br>


            <label class="form-label text-white">Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>


            <input type="submit" value="Login" class="btn btn-success"> 

            <div class="text-end">
                <a href="{{ route('create') }}" class="text-white right">Create a new account</a>
            </div>


            </form>
        </div>
        </div>
    </div>

@stop