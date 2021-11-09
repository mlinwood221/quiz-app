<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Attempt;
use App\Models\AttemptAnswer;
use App\Models\PostbackLog;
use App\Models\Badge;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    // Type : Quiz
    public function quiz($slug)
    {
        $quiz = Quiz::where('slug', $slug)->first();
        if ($quiz) {
            return view('user.quiz.quiz')->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }

    public function no_question($slug)
    {
        $quiz = Quiz::where('slug', $slug)->first();
        if ($quiz) {
            return view('user.quiz.quiz_noquestion')->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }

    public function calculate_score($attempt_id)
    {
        $attempt = Attempt::find($attempt_id);
        if (!$attempt)
            return 0;

        $questions = Question::where('quiz_id', $attempt->quiz_id)->get();
        $qTotal = sizeof($questions);
        $qCorrect = 0;
        if (!$qTotal)
            return 0;

        foreach ($questions as $question) {
            $attempt_answer = AttemptAnswer::where('attempt_id', $attempt->id)->where('question_id', $question->id)->first();
            if ($attempt_answer && strtolower($question->answer) == strtolower($attempt_answer->answer)) {
                $qCorrect ++;
            }
        }

        return number_format($qCorrect / $qTotal * 100);
    }

    public function next_question($slug, Request $request)
    {
        $response = array(
            'result' => 'fail',
            'reason' => 'unknown'
        );

        $quiz = Quiz::where('slug', $slug)->first();
        if ($quiz) {
            $question = Question::where('quiz_id', $quiz->id)->where('uid', $request->qUID)->first();
            if ($question) {
                $attempt = Attempt::where('quiz_id', $quiz->id)->where('uid', $request->attempt_uid)->first();
                $attempt_answer = new AttemptAnswer;
                $attempt_answer->attempt_id = $attempt->id;
                $attempt_answer->question_id = $question->id;
                $attempt_answer->answer = $request->value;
                $attempt_answer->ads_loaded = $request->ads_loaded;
                $attempt_answer->save();

                $next_question = Question::where('quiz_id', $quiz->id)->where('id', '>', $question->id)->first();
                if (!$next_question) {
                    $attempt->is_finished = true;
                    $attempt->score = $this->calculate_score($attempt->id);
                    $attempt->save();

                    $this->save_result($attempt->quiz_id, $attempt->score);

                    $response['qUID'] = 'end';
                }
                else {
                    $response['qUID'] = $next_question->uid;
                }
                $response['result'] = 'success';
            }
        }

        echo json_encode($response);
    }

    public function quiz_start($slug, Request $request)
    {
        $response = array(
            'result' => 'fail',
            'reason' => 'unknown'
        );

        $quiz = Quiz::where('slug', $slug)->first();
        if ($quiz) {
            $first_question = Question::where('quiz_id', $quiz->id)->first();
            if ($first_question) {
                $attempt = new Attempt;
                $attempt->uid = $this->generateRandomString(8) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(12);
                $attempt->is_loggedin = Auth::check();
                $attempt->user_id = Auth::check() ? Auth::user()->id : $request->uuid;
                $attempt->quiz_id = $quiz->id;
                $attempt->is_finished = false;
                $attempt->score = 0;
                $attempt->save();

                $response['result'] = 'success';
                $response['qUID'] = $first_question->uid;
                $response['attempt_uid'] = $attempt->uid;
            } else {
                $response['reason'] = 'no question';
            }
        }

        echo json_encode($response);
    }

    public function quiz_question($slug, $qUID, Request $request)
    {
        $quiz = Quiz::where('slug', $slug)->first();
        if ($quiz) {
            $question = Question::where('quiz_id', $quiz->id)->where('uid', $qUID)->first();
            if ($question) {
                // redirect to requested question
                $qNo = Question::where('quiz_id', $quiz->id)->where('id', '<=', $question->id)->count();
                $qTotal = Question::where('quiz_id', $quiz->id)->count();
                return view('user.quiz.question')->with('quiz', $quiz)->with('question', $question)->with('qNo', $qNo)->with('qTotal', $qTotal);
            } else {
                return redirect('quiz/' . $quiz->slug);
            }
        } else {
            return redirect('admin/404');
        }
    }

    public function quiz_result($slug, $attempt_uid)
    {
        $quiz = Quiz::where('slug', $slug)->first();
        if (!$quiz) {
            return redirect('404');
        }

        $attempt = Attempt::where('quiz_id', $quiz->id)->where('uid', $attempt_uid)->first();
        if (!$attempt) {
            return redirect('404');
        }
        
        return view('user.quiz.quiz_result')->with('quiz', $quiz)->with('attempt', $attempt);
    }

    // Type : WordSearch
    public function wordsearch($slug)
    {
        $quiz = Quiz::where('slug', $slug)->first();
        if ($quiz) {
            return view('user.quiz.wordsearch')->with('quiz', $quiz);
        } else {
            return redirect('admin/404');
        }
    }

    public function wordsearch_start(Request $request)
    {
        $response = array();
        $questions = Question::where('quiz_id', $request->quiz_id)->get();
        foreach ($questions as $question) {
            $response[$question->uid] = $question->question;
        }
        echo json_encode($response);
    }

    public function wordsearch_answer(Request $request)
    {
        $response = array(
            'score' => 'NaN',
            'min_score' => 100
        );

        $quiz = Quiz::find($request->quiz_id);
        if ($quiz && $quiz->type == 'wordsearch') 
        {            
            $attempt = new Attempt;
            $attempt->uid = $this->generateRandomString(8) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(12);
            $attempt->is_loggedin = Auth::check();
            $attempt->user_id = Auth::check() ? Auth::user()->id : $request->uuid;
            $attempt->quiz_id = $quiz->id;
            $attempt->is_finished = false;
            $attempt->score = 0;
            $attempt->save();

            $answers = json_decode($request->answers);
            $questions = Question::where('quiz_id', $request->quiz_id)->get();
            foreach ($questions as $question) 
            {
                if (isset($answers->{$question->uid}))
                {
                    $attempt_answer = new AttemptAnswer;
                    $attempt_answer->attempt_id = $attempt->id;
                    $attempt_answer->question_id = $question->id;
                    $attempt_answer->answer = $answers->{$question->uid};
                    $attempt_answer->ads_loaded = $request->ads_loaded;
                    $attempt_answer->save();
                } 
            }

            $attempt->is_finished = true;
            $attempt->score = $this->calculate_score($attempt->id);
            $attempt->save();

            $this->save_result($attempt->quiz_id, $attempt->score);
            
            $response['score'] = $attempt->score;
            $response['min_score'] = $quiz->min_score;
        }

        echo json_encode($response);
    }

    // Save result for both quiz and wordsearch
    public function save_result($quiz_id, $score)
    {
        $quiz = Quiz::find($quiz_id);

        // Calculate quiz completions average
        if ($score >= $quiz->min_score) {
            $quiz->average = number_format(($quiz->completions * $quiz->average + $score) / ($quiz->completions + 1));
            $quiz->completions ++;
            $quiz->save();
        }

        // Calculate badge completion
        if (Auth::check()) {
            $user_id = Auth::user()->id;

            $count_above_75 = 0;    // Complete quizzes with at least 75% score - Expert >= 50     Novice >= 10    Advanced >= 25
            $local_celebrity = 0;   // Complete 10 Celebrity quizzes with a 100% score
            $newbie = false;        // Complete your first quiz with at least a 75% score
            $gamer_life = 0;        // Complete 10 Gaming quizzes with a 100% score
            $couch_potato = 0;      // Complete 10 Movies & TV quizzes with a 100% score
            $around_the_world = 0;  // Complete 10 Geography quizzes with a 100% score
            $got_x_factor = false;      // Complete the X Factor quiz with a 100% score
            $world_cup_winner = false;  // Complete the World Cup quiz with a 100% score

            $results = Result::where('user_id', $user_id)->get();
            foreach ($results as $index=>$value) {
                if ($value->score >= 75)
                    $count_above_75 ++;
                if ($value->quiz->category->slug == 'celebrities' && $value->score == 100)
                    $local_celebrity ++;
                if ($index == 0 && $value->score >= 75)
                    $newbie = true;
                if ($value->quiz->category->slug == 'gaming' && $value->score == 100)
                    $gamer_life ++;
                if ($value->quiz->category->slug == 'movies-and-tv' && $value->score == 100)
                    $couch_potato ++;
                if ($value->quiz->category->slug == 'geography' && $value->score == 100)
                    $around_the_world ++;
                if ($value->quiz->slug == 'x-factor-quiz' && $value->score == 100)
                    $around_the_world = true;
                if ($value->quiz->slug == 'world-cup-quiz' && $value->score == 100)
                    $around_the_world = true;
            }

            $badge = Badge::where('user_id', $user_id)->first();
            if (!$badge) {
                $badge = new Badge;
                $badge->user_id = $user_id;
            }
            if ($count_above_75 >= 10)
                $badge->novice = true;
            else if ($count_above_75 >= 25)
                $badge->advanced = true;
            else if ($count_above_75 >= 50)
                $badge->expert = true;
            if ($local_celebrity >= 10)
                $badge->local_celebrity = true;
            $badge->newbie = $newbie;
            if ($gamer_life >= 10)
                $badge->gamer_life = true;
            if ($couch_potato >= 10)
                $badge->couch_potato = true;
            if ($around_the_world >= 10)
                $badge->around_the_world = true;
            $badge->got_x_factor = $got_x_factor;
            $badge->world_cup_winner = $world_cup_winner;
            $badge->save();
        }
    }

    // Send postback
    public function send_postback(Request $request)
    {
        if (isset($request->tracking_id) && $request->tracking_id) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://gjbvk.rdtk.io/postback?ptoken=afo0brhge4&clickid={$request->tracking_id}");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            $postback_log = new PostbackLog;
            $postback_log->tracking_id = $request->tracking_id;
            $postback_log->response = $response;
            $postback_log->save();
            echo 'success';
        } else {
            echo 'fail';
        }
    }
}
