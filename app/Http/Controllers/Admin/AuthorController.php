<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quiz;
use App\Models\Author;

use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    //
    public function moveImage($url, $author_id) 
    {
        if (strpos($url, 'tmp/') !== false) {
            $new_url = str_replace('tmp', 'author/' . $author_id, $url);
            if (Storage::disk('s3')->move($url, $new_url)) {
                return $new_url;
            } else {
                return $url;
            }
        } else {
            return $url;
        }
    }

    public function all()
    {
        $authors = Author::get();
        return view('admin.author.all')->with('authors', $authors);
    }

    public function add()
    {
        return view('admin.author.add')->with('action', 'add');
    }

    public function edit($author_id)
    {
        $author = Author::find($author_id);
        if ($author) {
            return view('admin.author.add')->with('action', 'edit')->with('author', $author);
        } else {
            return redirect('admin/404');
        }
    }

    public function view($author_id)
    {
        $author = Author::find($author_id);
        if ($author) {
            return view('admin.author.view')->with('author', $author);
        } else {
            return redirect('admin/404');
        }
    }
    
    public function create_or_edit_action(Request $request)
    {
        $response = array();

        try {
            $check_duplicate = null;
            if ($request->action == 'add') {
                $check_duplicate = Author::where('username', $request->username)->get();
            } else {
                $check_duplicate = Author::where('username', $request->username)->where('id', '!=', $request->author_id)->get();
            }

            if (sizeof($check_duplicate) > 0) {
                $response['result'] = 'fail';
                $response['reason'] = 'username';
            } else {
                if ($request->action == 'add')
                    $author = new Author;
                else {
                    $author = Author::find($request->author_id);
                    if (!$author) $author = new Author;
                }
                $author->username = $request->username;
                $author->firstname = $request->firstname;
                $author->lastname = $request->lastname;
                $author->image = '';
                $author->save();

                $request->main_image = $this->moveImage($request->main_image, $author->id);
                $author->image = $request->main_image;
                $author->save();

                $response['result'] = 'success';
            }
        } catch (\Exception $e) {
            $response['result'] = 'fail';
            $response['reason'] = 'unknown';
        }

        echo json_encode($response);
    }

    public function delete($author_id)
    {
        try {
            Storage::disk('s3')->deleteDirectory('author/' . $author_id);
            Author::find($author_id)->delete();
        } catch (\Exception $e) {

        }

        return redirect('admin/author/all');
    }

    public function auto_assign()
    {
        try {
            $author_ids = Author::pluck('id')->toArray();
            $quizzes = Quiz::get();
            foreach ($quizzes as $quiz) {
                $quiz->author_id = $author_ids[array_rand($author_ids)];
                $quiz->save();
            }
            echo 'success';
        } catch (\Exception $e) {
            echo 'fail';
        }
    }
}
