@extends('layout.layout')
@section('style')
    <style>

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>
@endsection
@section('konten')
    <form class="form-signin" method="POST" action="{{ route('register')}}">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Register {{config('app.name')}}</h1>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" name="name" id="inputName" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <div class ='invalid-feedback'>
            {{$errors->first('name')}}
            </div>
        @endif
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <div class ='invalid-feedback'>
            {{$errors->first('email')}}
            </div>
        @endif
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required>
        @if ($errors->has('password'))
            <div class ='invalid-feedback'>
            {{$errors->first('password')}}
            </div>
        @endif
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" required>
        @if ($errors->has('password_confirmation'))
            <div class ='invalid-feedback'>
            {{$errors->first('password_confirmation')}}
            </div>
        @endif
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
@endsection
