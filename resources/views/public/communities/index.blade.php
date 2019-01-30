@extends('public.layout')

@section('title', 'TogeDJer Communities List')

@section('content')
<h1>Communities List</h1>

    <div class="d-flex justify-content-center">
        {{ $communities->links() }}
    </div>

    @forelse($communities as $community)
    <div class="card mb-2">
        <div class="card-header">
            {{ $community->name }}
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">{{ $community->creator_nickname}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{ $community->genre }}</h6>
            <sub class"card-subtitle mb-2 text-muted">{{ $community->max_users}}</sub>
            <p class="card-text">{{ str_limit($community->description, 60) }}</p>

            <form action="/communities/{{ $community->id }}" method="post" class="mr-2 float-right">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete this Community</button>
            </form>
            <a href="/communities/{{ $community->slug }}" class="btn btn-primary btn-sm mr-2 float-right">Access</a>
            <a href="/communities/{{ $community->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit this Community</a>

      </div>
    </div>
    @empty
      <p>There's no Communities to show right now.
      If you think this is a problem and shouldn't be happening, please contact with us: <span class="text-muted">sample@mail.com</span>.</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $communities->links() }}
    </div>
@endsection
