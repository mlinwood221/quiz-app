<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Quiz;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        $recent_quizzes = Quiz::orderBy('created_at', 'desc')->take(8)->get();
        $popular_quizzes = Quiz::orderBy('completions', 'desc')->take(8)->get();
        return view('user.homepage')->with('recent_quizzes', $recent_quizzes)->with('popular_quizzes', $popular_quizzes);
    }

    public function quiz_list($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $matched_quizzes = array();
            $quizzes = Quiz::get();
            foreach ($quizzes as $quiz) {
                if (in_array($category->id, $quiz->arr_cat_ids)) {
                    array_push($matched_quizzes, $quiz);
                }
            }
            return view('user.quiz.quiz_list')->with('quizzes', $matched_quizzes)->with('category', $category);
        } else {
            return redirect('404');
        }
    }

    public function badge()
    {
        return view('user.badge');
    }
    public function about_us()
    {
        return view('user.about_us');
    }
    
    public function contact_us()
    {
        return view('user.contact_us');
    }

    public function privacy_policy()
    {
        return view('user.privacy_policy');
    }
    
    public function submit_contact(Request $request)
    {
        if ($this->sendMail('contact', 'contact@quizzlybears.com', 'Site Support', 'Customer contact support', $request->all())) {
            $request->session()->flash('submit_result', 'success');
            return back();
        } else {
            $request->session()->flash('submit_result', 'fail');
            return back()->withInput($request->all());
        }
    }
    
    public function subscribe(Request $request)
    {
        if ($this->sendMail('subscribe', 'subscribe@quizzlybears.com', 'Site Support', 'Customer subscribe', $request->all())) {
            echo 'success';
        } else {
            echo 'fail';
        }
    }

    public function search(Request $request)
    {
        $result = array();

        $query = Quiz::where('title', 'like', '%' . $request->title . '%');
        if ($request->type != 'all') {
            $query = $query->where('type', $request->type);
        }
        $quizzes = $query->get();

        $filter_cat_ids = explode(',', $request->category);
        foreach ($quizzes as $quiz) {
            $flag = false;

            $quiz_cat_ids = explode(',', $quiz->category_ids);
            foreach ($quiz_cat_ids as $cat_id) {
                if (in_array($cat_id, $filter_cat_ids)) {
                    $flag = true;
                    break;
                }
            }

            if (!$flag) {
                continue;
            } 

            $flag = false;

            switch ($request->difficulty) {
                case 'easy':
                    if ($quiz->completions == 0 || $quiz->average >= 80)
                        $flag = true;
                    break;
                case 'medium':
                    if ($quiz->completions && $quiz->average < 80 && $quiz->average >= 60)
                        $flag = true;
                    break;
                case 'hard':
                    if ($quiz->completions && $quiz->average < 60)
                        $flag = true;
                    break;
                default:
                    $flag = true;
                    break;
            }

            if ($flag) {
                array_push($result, $quiz);
            }
        }

        return view('user.search')->with('quizzes', $result);
    }
}
