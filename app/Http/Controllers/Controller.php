<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HtmlSection;

use DB;
use Storage;
use Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $categories = Category::get();
        $html_sections = HtmlSection::get();

        View::share('categories', $categories);
        View::share('html_sections', $html_sections);
    }

    public function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function sendMail($template, $to, $name, $subject, $data)
    {
        Mail::send('email.' . $template, $data, function ($m) use ($to, $name, $subject) {
            $m->from('support@quizzlybears.com', 'From Site');
            $m->to($to, $name)->subject($subject);
        });

        if(count(Mail::failures()) > 0) {
            return 0;
        }

        return 1;
    }

    public function copy_old_database()
    {
        // { // Copy categories table
        //     $old_categories = DB::connection('mysql2')->table('puzzle_categories')->get();
        //     DB::table('categories')->delete();
        //     foreach ($old_categories as $old) {
        //         DB::table('categories')->insert([
        //             'id' => $old->id,
        //             'name' => $old->title,
        //             'slug' => $old->slug,
        //             'created_at' => \Carbon\Carbon::now(),
        //             'updated_at' => \Carbon\Carbon::now()
        //         ]);
        //     }
        //     echo sizeof($old_categories) . ' inserted';
        // }

        // { // Copy quizzes table
        //     $old_quizzes = DB::connection('mysql2')->table('puzzles')->get();
        //     DB::table('quizzes')->delete();
        //     $count = 0;
        //     foreach ($old_quizzes as $index=>$old) {
        //         if ($old->is_active == 1) {
        //             $url = $old->image;
        //             $contents = file_get_contents($url);
        //             $name = substr($url, strrpos($url, '/') + 1);
        //             $path = Storage::disk('s3')->put("quiz/{$old->id}/{$name}", $contents);

        //             DB::table('quizzes')->insert([
        //                 'id' => $old->id,
        //                 'category_id' => $old->category_id,
        //                 'title' => $old->title,
        //                 'slug' => $old->slug,
        //                 'type' => $old->type,
        //                 'image' => "quiz/{$old->id}/{$name}",
        //                 'headline' => $old->teaser,
        //                 'description' => $old->description,
        //                 'completions' => 0,
        //                 'average' => 0,
        //                 'min_score' => $old->paid_min_score,
        //                 'created_at' => \Carbon\Carbon::now(),
        //                 'updated_at' => \Carbon\Carbon::now()
        //             ]);
        //             $count ++;
        //         }
        //     }
        //     echo $count . ' inserted';
        // }

        // { // Copy questions table
        //     // Failed ids 193, 367
        //     $old_questions = DB::connection('mysql2')->table('puzzle_questions')->get();
        //     $count = 0;
        //     $failed_ids = array();
        //     foreach ($old_questions as $index=>$old) {
        //         try {
        //             if ($old->image) {
        //                 $url = $old->image;
        //                 $contents = file_get_contents($url);
        //                 $name = substr($url, strrpos($url, '/') + 1);
        //                 $path = Storage::disk('s3')->put("question/{$old->id}/{$name}", $contents);
        //             }

        //             $choices = array();
        //             $answer = '';
        //             $choices_array = json_decode($old->answers);
        //             if ($choices_array == null) {
        //                 $choices = array();
        //                 $answer = $old->answers;
        //             } else {
        //                 foreach ($choices_array as $value) {
        //                     if ($value[2] == 1) {
        //                         $answer = $value[1];
        //                     }
        //                     array_push($choices, $value[1]);
        //                 }
        //             }

        //             DB::table('questions')->insert([
        //                 'id' => $old->id,
        //                 'quiz_id' => $old->puzzle_id,
        //                 'uid' => $old->shortcode,
        //                 'question' => $old->title,
        //                 'image' => $old->image ? "question/{$old->id}/{$name}" : '',
        //                 'fact' => $old->fact,
        //                 'choices' => implode(',', $choices),
        //                 'answer' => $answer,
        //                 'created_at' => \Carbon\Carbon::now(),
        //                 'updated_at' => \Carbon\Carbon::now()
        //             ]);
        //             $count ++;
        //         } catch (\Exception $e) {
        //             array_push($failed_ids, $old->id);
        //         }
        //     }
        //     echo $count . ' inserted' . "\r\n";
        //     var_dump($failed_ids);

        // }
    }
}
