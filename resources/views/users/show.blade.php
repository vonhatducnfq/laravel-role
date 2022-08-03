@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Show user</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        @role('admin')
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
        @endrole
        @role('student')
            <a href="{{ route('users.mentor') }}" class="btn btn-default">Back</a>
        @endrole
        @role('mentor')
            <a href="{{ route('users.student') }}" class="btn btn-default">Back</a>
        @endrole
    </div>
@endsection
