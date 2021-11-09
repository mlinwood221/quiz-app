<?php

namespace App\Http\Controllers\User;

use App\Models\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function view($username)
    {
        $author = Author::where('username', $username)->first();
        if ($author) {
            return view('user.author.view')->with('author', $author);
        } else {
            return redirect('404');
        }
    }
}
