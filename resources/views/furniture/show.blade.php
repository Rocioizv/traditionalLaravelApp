@extends('base')

@section('title', '')

@section('content')

<div class="form-group">
        furniture id #:
        {{$furniture->id}}
    </div>
    <div class="form-group">
        furniture name:
        {{$furniture->name}}
    </div>
    <div class="form-group">
        furniture price:
        {{number_format($furniture->price,2)}}€
    </div>
    <div class="form-group">
        <a href="{{url()->previous()}}">back</a>
    </div>

@endsection