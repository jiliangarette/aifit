<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Return the user profile data as a JSON response
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            // 'name' => '$user->name',
            // 'email' => '$user->email',
            // Include any other user information you want to expose
        ]);
    }
}
