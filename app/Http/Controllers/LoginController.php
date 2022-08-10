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

public function submitSignUp(Request $request)
    {
        // dd($request);
        $attributes = $request->validate([
            'name'=> ['required', 'max:255'],
            'password'=> ['required', 'min:7', 'max:255'],
            'email'=>['required', 'email', 'unique:users,email'],
        ]);

        $user = User::create($attributes);

        session()->flash('success', 'Successful signup');
        auth()->login($user);
        return redirect('/');
    }

    public function session($key=null, $default = null)
    {
        if(is_null($key)){
            return app('session');
        }
        if(is_array($key)){
            return app('session')->put($key);
        }
        return app('session')->get($key, $default);
    }

}
