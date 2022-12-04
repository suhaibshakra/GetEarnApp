<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $inputs = $request->validated();
  
        if ($request->hasFile('avatar')) {
            // Public Folder
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);
            $inputs['avatar'] = $imageName;
        }

        $user = User::create($inputs);

        $role_user =  Role::where('name', 'user')->first();

        $user->roles()->save($role_user);

        auth()->login($user);

        return redirect('/dashboard')->with('success', "Account successfully registered.");
    }
}