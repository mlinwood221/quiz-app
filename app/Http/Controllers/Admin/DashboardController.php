<?php

namespace App\Http\Controllers\Admin;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return redirect('admin/category/all');
        // return view('admin.dashboard');
    }
    
    public function upload_image(Request $request)
    {
        $name = $this->generateRandomString(6) . '.' . $request->file('image')->getClientOriginalExtension();
        Storage::disk('s3')->putFileAs("tmp", $request->file('image'), $name, 'public');
        echo "tmp/{$name}";
    }

    public function remove_image(Request $request)
    {
        Storage::disk('s3')->delete($request->url);
        echo 'success';
    }
}
