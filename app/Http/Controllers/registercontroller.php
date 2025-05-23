<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    // Show the registration form
    public function create1()
    {
        return view('register');
    }

    // Handle the form submission and insert into database
    public function store(Request $request)
    {
        // Step 3: Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Step 3: Create a new user record
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Always hash passwords!
        ]);

        // Step 3: Redirect to home or login with success message
        return redirect('/a')->with('success', 'Registration successful!');
    }
}
