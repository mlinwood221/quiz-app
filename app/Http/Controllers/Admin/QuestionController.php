<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quiz;
use App\Models\Category;
use App\Models\Question;

use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    //
    public function moveImage($url, $question_id) 
    {
        if (strpos($url, 'tmp/') !== false) {
            $new_url = str_replace('tmp', 'question/' . $question_id, $url);
            if (Storage::disk('s3')->move($url, $new_url)) {
                return $new_url;
            } else {
                return $url;
            }
        } else {
            return $url;
        }
    }

    public function all($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        if ($quiz) {
            $questions = Question::where('quiz_id', $quiz_id)->get();
            return view('admin.question.all')->with('questions', $questions)->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }

    public function add($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        if ($quiz) {
            return view('admin.question.add')->with('action', 'add')->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }

    public function edit($quiz_id, $question_id)
    {
        $quiz = Quiz::find($quiz_id);
        $question = Question::find($question_id);
        if ($quiz && $question && $question->quiz_id == $quiz_id) {
            $question->choices = explode(',', $question->choices);
            return view('admin.question.add')->with('action', 'edit')->with('question', $question)->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }

    public function view($quiz_id, $question_id)
    {
        $quiz = Quiz::find($quiz_id);
        $question = Question::find($question_id);
        if ($quiz && $question && $question->quiz_id == $quiz_id) {
            $question->choices = explode(',', $question->choices);
            return view('admin.question.view')->with('question', $question)->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }
    
    public function create_or_edit_action($quiz_id, Request $request)
    {
        $response = array();

        $quiz = Quiz::find($quiz_id);
        if (!$quiz) {
            $response['result'] = 'fail';
            $response['reason'] = 'unknown';
        } else {
            try {
                if ($request->action == 'add')
                    $question = new Question;
                else {
                    $question = Question::find($request->question_id);
                    if (!$question) $question = new Question;
                }
                $question->uid = $this->generateRandomString(6);
                $question->quiz_id = $request->quiz_id;
                $question->question = $request->question;
                if ($quiz->type == 'quiz') {
                    $question->fact = $request->fact ? $request->fact : '';
                    $request->choices = json_decode($request->choices);
                    $question->choices = implode(',', $request->choices);
                } else {
                    $question->fact = '';
                }
                $question->answer = $request->answer;
                $question->save();

                if ($quiz->type == 'quiz') {
                    $request->main_image = $this->moveImage($request->main_image, $question->id);
                    $question->image = $request->main_image;
                    $question->save();
                } else {
                    $question->image = '';
                    $question->save();
                }

                $response['result'] = 'success';
            } catch (\Exception $e) {
                $response['result'] = 'fail';
                $response['reason'] = 'unknown';
            }
        }

        echo json_encode($response);
    }

    public function delete($quiz_id, $question_id)
    {
        try {
            Storage::disk('s3')->deleteDirectory('question/' . $question_id);
            Question::find($question_id)->delete();
        } catch (\Exception $e) {
        }

        return redirect('admin/quiz/' . $quiz_id . '/all');
    }
}
