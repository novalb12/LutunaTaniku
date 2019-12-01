@extends('layout.layout')
@section('konten')
    SELAMAT MASUK {{Auth::user()->name ?? ''}}

    <br>
    <a href="{{route('logout')}}">Log Out</a>
@endsection
