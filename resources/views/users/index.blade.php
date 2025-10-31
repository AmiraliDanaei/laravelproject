@extends('layouts.app')

@section('content')
<h1>Comments</h1>
<a href="{{ route('comments.create') }}">Create New Comment</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@foreach($comments as $comment)
    <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
        <p>{{ $comment->user->name }} on Post: {{ $comment->post->title }}</p>
        <p>{{ $comment->body }}</p>
        <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endforeach
@endsection
