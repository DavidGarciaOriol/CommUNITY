@extends('public.layout')

@section('title', 'Edit Community Parameters')

@section('content')
<form action="/communities/{{ $community->id }}" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.coommunities.partials.form')

    <button type="submit" class="btn btn-primary">Save Community Changes</button>
</form>
@endsection
