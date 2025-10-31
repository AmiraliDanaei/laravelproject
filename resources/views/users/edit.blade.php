@extends('layouts.app')

@section('content')
<h1>Edit Comment</h1>

<form action="{{ route('comments.update', $comment->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>User:</label>
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $comment->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
        @endforeach
    </select>
    <br>
    <label>Post:</label>
    <select name="post_id">
        @foreach($posts as $post)
            <option value="{{ $post->id }}" {{ $post->id == $comment->post_id ? 'selected' : '' }}>{{ $post->title }}</option>
        @endforeach
    </select>
    <br>
    <label>Body:</label>
    <textarea name="body">{{ old('body', $comment->body) }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
