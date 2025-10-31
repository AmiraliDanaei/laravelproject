<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>

<h1>User List</h1>

<a href="{{ route('users.create') }}">Create User</a>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.show', $user->id) }}">View</a> | 
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>

            <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete user?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
