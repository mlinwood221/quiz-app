<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;

use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function all()
    {
        $categories = Category::get();
        return view('admin.category.all')->with('categories', $categories);
    }

    public function add()
    {
        return view('admin.category.add')->with('action', 'add');
    }

    public function edit($category_id)
    {
        $category = Category::find($category_id);
        if ($category) {
            return view('admin.category.add')->with('action', 'edit')->with('category', $category);
        } else {
            return redirect('admin/404');
        }
    }
    
    public function create_or_edit_action(Request $request)
    {
        $response = array();

        try {
            $slug = $this->slugify($request->name);
            $check_slug = null;
            if ($request->action == 'add') {
                $check_slug = Category::where('slug', $slug)->get();
            } else {
                $check_slug = Category::where('slug', $slug)->where('id', '!=', $request->category_id)->get();
            }

            if (sizeof($check_slug) > 0) {
                $response['result'] = 'fail';
                $response['reason'] = 'slug';
            } else {
                if ($request->action == 'add')
                    $category = new Category;
                else {
                    $category = Category::find($request->category_id);
                    if (!$category) $category = new Category;
                }
                $category->name = $request->name;
                $category->slug = $slug;
                $category->save();
                $response['result'] = 'success';
            }
        } catch (\Exception $e) {
            $response['result'] = 'fail';
            $response['reason'] = 'unknown';
        }

        echo json_encode($response);
    }

    public function delete($category_id)
    {
        Category::find($category_id)->delete();
        return redirect('admin/category/all');
    }
}
