<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt(['email' => $request['login-username'], 'password' => $request['login-password']])) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        } else {
            \Session::flash('message', 'Invalid login!');
            return redirect('admin/login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
