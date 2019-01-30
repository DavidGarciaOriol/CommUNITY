@extends('public.layout')

@section('title', 'Book Info')

@section('content')
    <h2> {{$community->name}} </h2>
    <h4> {{$community->creator_nickname}} </h4>
    <sub> Max: {{$community->max_users}} users </sub>
    <p> {{$community->description}} </p>

@endsection
