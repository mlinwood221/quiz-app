<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function all()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('user.blog.all')->with('blogs', $blogs);
    }

    public function view($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if ($blog) {
            $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
            return view('user.blog.view')->with('blog', $blog)->with('latest_blogs', $latest_blogs);
        } else {
            return redirect('404');
        }
    }
}
