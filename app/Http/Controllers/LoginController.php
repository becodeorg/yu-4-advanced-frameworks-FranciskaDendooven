<?php

namespace App\Http\Controllers;

use App\config\auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function submitLogin(Request $request, User $user)
    {
        $attributes = $request->validate([
            'name'=> ['required', 'max:255'],
            'password'=> ['required', 'max:255'],
        ]);

        if(auth()->attempt($attributes)) {
            session()->flash('success', 'Successful login');
            return redirect('/');
        }
        //Invalid error msg
        throw ValidationException::withMessages([
            'name' => 'The name you used is invalid...',
            'password' => 'The password you used is invalid'
        ]);
    }
    public function logout()
    {
    auth()->logout();
    return redirect('/');
}
}
