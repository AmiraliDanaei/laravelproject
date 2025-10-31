<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $user->name }}"><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $user->email }}"><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('users.index') }}">Back</a>

</body>
</html>
