<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    //
    public function index() 
    {
        return view('admin.account.profile');
    }

    public function save_profile(Request $request)
    {
        $rules = array(
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'confirmed',
        );

        if ($request->password)
            $rules['password'] = 'min:6 | confirmed';

        Validator::make($request->all(), $rules)->validate();

        $user = Auth::guard('admin')->user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        \Session::flash('message', 'Profile successfully updated!');

        return back();
    }
}
