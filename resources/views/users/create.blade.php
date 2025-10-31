@extends('layouts.app')

@section('content')
<h1>Create Comment</h1>

<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <label>User:</label>
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <br>
    <label>Post:</label>
    <select name="post_id">
        @foreach($posts as $post)
            <option value="{{ $post->id }}">{{ $post->title }}</option>
        @endforeach
    </select>
    <br>
    <label>Body:</label>
    <textarea name="body">{{ old('body') }}</textarea>
    <br>
    <button type="submit">Create</button>
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
