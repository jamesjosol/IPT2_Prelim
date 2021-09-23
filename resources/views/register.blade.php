@extends('base')

@section('content')
    
<div class="row mt-4">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title font-weight-light"><i class="fa fa-user"></i> User Registration</h3>
            </div>
            <div class="card-body">
                <form class="form" action="{{ url('/register') }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="name"><i class="far fa-user"></i> Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                        <span class="errspan" id="errspan">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group @error('email') has-error @enderror">
                        <label for="email"><i class="fas fa-at"></i> Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                        <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group login-form @error('contactNo') has-error @enderror">
                        <label for="contactNo"><i class="far fa-phone-alt"></i> Contact No.</label>
                        <span class="prepend">+63</span>
                        <input type="text" name="contactNo" id="contactNo" value="{{ old('contactNo') ? old('contactNo') : '9458090921' }}" class="form-control" readonly>
                        <span class="errspan" id="errspan">{{ $errors->first('contactNo') }}</span>
                    </div>
                    <div class="form-group @error('password') has-error @enderror">
                        <label for="password"><i class="fas fa-key"></i> Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" onclick="btnload()" id="actionBtn" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop