<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quiz;
use App\Models\Category;
use App\Models\Question;
use App\Models\Author;

use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    //
    public function moveImage($url, $quiz_id) 
    {
        if (strpos($url, 'tmp/') !== false) {
            $new_url = str_replace('tmp', 'quiz/' . $quiz_id, $url);
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
        $quizzes = Quiz::get();
        return view('admin.quiz.all')->with('quizzes', $quizzes);
    }

    public function add()
    {
        $authors = Author::get();
        $categories = Category::get();
        return view('admin.quiz.add')->with('action', 'add')->with('categories', $categories)->with('authors', $authors);
    }

    public function edit($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        if ($quiz) {
            $authors = Author::get();
            $categories = Category::get();
            return view('admin.quiz.add')->with('action', 'edit')->with('quiz', $quiz)->with('categories', $categories)->with('authors', $authors);
        } else {
            return redirect('admin/404');
        }
    }

    public function view($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        if ($quiz) {
            $categories = Category::get();
            return view('admin.quiz.view')->with('quiz', $quiz)->with('categories', $categories);
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
                $check_slug = Quiz::where('slug', $slug)->get();
            } else {
                $check_slug = Quiz::where('slug', $slug)->where('id', '!=', $request->quiz_id)->get();
            }

            if (sizeof($check_slug) > 0) {
                $response['result'] = 'fail';
                $response['reason'] = 'slug';
            } else {
                if ($request->action == 'add')
                    $quiz = new Quiz;
                else {
                    $quiz = Quiz::find($request->quiz_id);
                    if (!$quiz) $quiz = new Quiz;
                }
                $request->category_ids = json_decode($request->category_ids);
                $quiz->category_ids = implode(',', $request->category_ids);
                $quiz->title = $request->title;
                $quiz->type = $request->type;
                $quiz->min_score = $request->min_score;
                $quiz->slug = $this->slugify($request->title);
                $quiz->headline = $request->headline;
                if ($quiz->type == 'quiz')
                    $quiz->description = $request->description;
                else
                    $quiz->description = '';
                $quiz->author_id = $request->author_id;
                $quiz->users_taking = $request->users_taking;
                $quiz->save();

                $request->main_image = $this->moveImage($request->main_image, $quiz->id);
                $quiz->image = $request->main_image;
                $quiz->save();

                $response['result'] = 'success';
            }
        } catch (\Exception $e) {
            $response['result'] = 'fail';
            $response['reason'] = 'unknown';
        }

        echo json_encode($response);
    }

    public function delete($quiz_id)
    {
        try {
            Storage::disk('s3')->deleteDirectory('quiz/' . $quiz_id);
            Quiz::find($quiz_id)->delete();
            $questions = Question::where('quiz_id', $quiz_id)->get();
            foreach ($questions as $question) {
                Storage::disk('s3')->deleteDirectory('question/' . $question->id);
                $question->delete();
            }
        } catch (\Exception $e) {

        }

        return redirect('admin/quiz/all');
    }
}
