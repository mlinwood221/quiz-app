<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ad;

use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    public function view()
    {
        $ad = Ad::first();
        return view('admin.ad.view')->with('ad', $ad);
    }

    public function edit_action(Request $request)
    {
        $ad = Ad::first();
        if (!$ad) {
            $ad = new Ad;
        }
        $ad->content = $request->content;
        $ad->save();
        \Session::flash('message', 'Saved successfully.');
        return back();
    }
}
