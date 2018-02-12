<?php

namespace ProjectSam\Http\Controllers\Auth;

use Illuminate\Http\Request;
use ProjectSam\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdministradorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except'=>['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.AdministradorLogin');
    }
    public function login(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required|email',
            'password'=>'required|min:6'
            ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        return \redirect()->back()->withInput($request->only('email','remember'));

    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return \redirect('/');
    }
}
