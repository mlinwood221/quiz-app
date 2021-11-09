<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    public function moveImage($url, $blog_id) 
    {
        if (strpos($url, 'tmp/') !== false) {
            $new_url = str_replace('tmp', 'blog/' . $blog_id, $url);
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
        $blogs = Blog::get();
        return view('admin.blog.all')->with('blogs', $blogs);
    }

    public function add()
    {
        return view('admin.blog.add')->with('action', 'add');
    }

    public function edit($blog_id)
    {
        $blog = Blog::find($blog_id);
        if ($blog) {
            return view('admin.blog.add')->with('action', 'edit')->with('blog', $blog);
        } else {
            return redirect('admin/404');
        }
    }

    public function view($blog_id)
    {
        $blog = Blog::find($blog_id);
        if ($blog) {
            return view('admin.blog.view')->with('blog', $blog);
        } else {
            return redirect('admin/404');
        }
    }
    
    public function create_or_edit_action(Request $request)
    {
        $response = array();

        try {            
            $slug = $this->slugify($request->title);
            $check_slug = null;
            if ($request->action == 'add') {
                $check_slug = Blog::where('slug', $slug)->get();
            } else {
                $check_slug = Blog::where('slug', $slug)->where('id', '!=', $request->blog_id)->get();
            }

            if (sizeof($check_slug) > 0) {
                $response['result'] = 'fail';
                $response['reason'] = 'slug';
            } else {
                if ($request->action == 'add')
                    $blog = new Blog;
                else {
                    $blog = Blog::find($request->blog_id);
                    if (!$blog) $blog = new Blog;
                }
                $blog->title = $request->title;
                $blog->slug = $slug;
                $blog->headline = $request->headline;
                $blog->description = $request->description;
                $blog->save();

                $request->main_image = $this->moveImage($request->main_image, $blog->id);
                $blog->image = $request->main_image;
                $blog->save();

                $response['result'] = 'success';
            }
        } catch (\Exception $e) {
            $response['result'] = 'fail';
            $response['reason'] = 'unknown';
        }

        echo json_encode($response);
    }

    public function delete($blog_id)
    {
        try {
            Storage::disk('s3')->deleteDirectory('blog/' . $blog_id);
            Blog::find($blog_id)->delete();
        } catch (\Exception $e) {

        }

        return redirect('admin/blog/all');
    }
}
