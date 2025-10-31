<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>

<h1>User Details</h1>

<p><b>ID:</b> {{ $user->id }}</p>
<p><b>Name:</b> {{ $user->name }}</p>
<p><b>Email:</b> {{ $user->email }}</p>

<br>

<a href="{{ route('users.index') }}">Back to list</a>

</body>
</html>
