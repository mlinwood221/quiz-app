<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostbackLog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostbackLogController extends Controller
{
    //
    public function all()
    {
        $logs = PostbackLog::orderBy('created_at', 'desc')->get();
        return view('admin.postback.all')->with('logs', $logs);
    }
}
