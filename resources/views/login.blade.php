@extends('base')

@section('content')

@include('info_msg')

<div class="row mt-4">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title"><i class="fa fa-user"></i> User Login</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/login') }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group @error('email') has-error @enderror">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control">
                        <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group @error('password') has-error @enderror">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" id="actionBtn" onclick="btnload()" type="submit">Login</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

@stop