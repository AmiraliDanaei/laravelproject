<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of users
    public function index()
    {
        return "This is the list of all users.";
    }

    // Show the form for creating a new user
    public function create()
    {
        return "This is the create user form.";
    }

    // Store a newly created user
    public function store(Request $request)
    {
        return "New user has been stored (simulated).";
    }

    // Display a specific user
    public function show($id)
    {
        return "Showing user with ID: " . $id;
    }

    // Show the form for editing a specific user
    public function edit($id)
    {
        return "This is the edit form for user with ID: " . $id;
    }

    // Update a specific user
    public function update(Request $request, $id)
    {
        return "User with ID " . $id . " has been updated (simulated).";
    }

    // Delete a specific user
    public function destroy($id)
    {
        return "User with ID " . $id . " has been deleted (simulated).";
    }
}
