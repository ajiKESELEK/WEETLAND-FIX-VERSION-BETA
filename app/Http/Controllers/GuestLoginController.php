<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GuestLoginController extends Controller
{
    public function login()
    {
        $guestUser = User::where('email', 'guest@example.com')->first();
        
        if (!$guestUser) {
            $guestUser = User::create([
                'name' => 'Guest User',
                'email' => 'guest@example.com',
                'password' => bcrypt('guestpassword'),
            ]);
        }

        Auth::login($guestUser);
        return redirect('/dashboard');
    }
}

