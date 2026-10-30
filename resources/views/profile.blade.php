
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="hero">
    <h2>User Profile</h2>
    <p>Demo user information.</p>
</div>

<div class="card">

    @if($user)

        <h2>{{ $user->full_name }}</h2>

        <p>
            <strong>Username:</strong>
            {{ $user->username }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ $user->email }}
        </p>

        <p>
            <strong>Account Created:</strong>
            {{ $user->created_at->format('F d, Y') }}
        </p>

    @else

        <p>No user record found.</p>

    @endif

</div>

@endsection
