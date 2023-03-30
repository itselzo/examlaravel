@extends('layout')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="height:100vh; ">
        <div class="card" style="width: 400px; background-color:#576e60;"  >"
            <div class="card-header" style="background-color:#576e60;" >Register Form</div>
            <div class="card-body" style="background-color:#145da6;">

                <form action="{{ route('register') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">First Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <div class="text-end">
                        <a href="{{ route('login') }}" class="text-white right">No, I already have an account</a>
                    </div>
                    

                </form>
            </div>
        </div>
    </div>

@stop
