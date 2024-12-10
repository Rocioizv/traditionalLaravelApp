@extends('base')

@section('title', 'products, pokemon, etc.')

@section('content')

    @if(session('user'))
        <a href="{{url('logout')}}" class="btn btn-success">log out</a>
    @else
        <a href="{{url('login')}}" class="btn btn-success">log in</a>
    @endif
    &nbsp;
    <a href="{{url('product')}}" class="btn btn-success">products</a>
    <a href="{{url('pokemon')}}" class="btn btn-success">pokemon</a>

@endsection