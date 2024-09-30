<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUsers()
    {
        User::factory()->count(100)->create();
        return redirect()->route('viewUsers');
    }

    // Function to return the view with users data
    public function viewUsers()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
}
