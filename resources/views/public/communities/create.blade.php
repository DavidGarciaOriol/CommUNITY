@extends('public.layout')

@section('title', 'New Community')

@section('content')
<form action="/communities" method="post" novalidate>

    @csrf

    @include('public.communities.partials.form')

    <button type="submit" class="btn btn-primary">Submit new Community</button>
</form>
@endsection
