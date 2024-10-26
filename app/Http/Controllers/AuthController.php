<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Suggested code may be subject to a license. Learn more: ~LicenseLog:2530261259.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3716942467.
use Illuminate\Http\Response;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class Authcontroller extends Controller
{
    public function myProfile(){
        return view('blog.register');
    }
    public function registerForm(){
        return view('blog.register');

    }
    public function index(){
        return view('blog.index');
    }
    public function loginForm(){
        return view('blog.login');
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('blog.edit', compact('user'));
    }
    public function register(RegisterRequets $request){
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        }
        $user = User::create([
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'avatar' => $avatarPath,
        ]);
        Auth::login($user);
        return redirect()->route('blog.index');
    }
    public function login(LoginRequest $request){
        $credentials = $request->all();
        $user = User::where('email', $request->input('email'))->first();
       if(!Hash::check($request->password, $user->password)){
        return redirect()->route('blog.login');
       }
       if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->route('blog.index');
       }
       else{
        return "incorrect email or password";
       }

    }

    public function update(RegisterRequest $request, $id) {
        $user = User::find($id);
        if (!empty($user->avatar)) {
            $oldAvatarPath = storage_path('app/public/' . $user->avatar);
            if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }
            }
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if ($request->hasFile('avatar')) {
            $user->avatar = $request->file('avatar')->store('avatars', 'public');
        }
        $user->save();
        return redirect()->route('blog.my-profile');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('blog.login');
    }



}
