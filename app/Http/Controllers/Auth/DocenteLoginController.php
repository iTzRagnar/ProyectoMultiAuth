<?php

namespace ProjectSam\Http\Controllers\Auth;

use Illuminate\Http\Request;
use ProjectSam\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DocenteLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:docente', ['except'=>['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.DocenteLogin');
    }
    public function login(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6'
            ]);
        if(Auth::guard('docente')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
        {
            return redirect()->intended(route('docente.dashboard'));
        }
        return \redirect()->back()->withInput($request->only('email','remember'));

    }
    public function logout(Request $request)
    {
        Auth::guard('docente')->logout();
        return \redirect('/');
    }
}
