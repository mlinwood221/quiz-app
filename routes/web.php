<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/copy-old-database', 'Controller@copy_old_database');

Route::get('/badge', 'User\HomeController@badge');
Route::get('/about-us', 'User\HomeController@about_us');
Route::get('/contact-us', 'User\HomeController@contact_us');
Route::get('/privacy-policy', 'User\HomeController@privacy_policy');
Route::post('/submit-contact', 'User\HomeController@submit_contact');
Route::post('/subscribe', 'User\HomeController@subscribe');

Route::get('/', 'User\HomeController@homepage');
Route::get('/search', 'User\HomeController@search');

Route::get('/category/{slug}', 'User\HomeController@quiz_list');

Route::get('/quiz/{slug}', 'User\QuizController@quiz');
Route::get('/quiz/{slug}/no-question', 'User\QuizController@no_question');
Route::post('/quiz/{slug}/start', 'User\QuizController@quiz_start');
Route::get('/quiz/{slug}/result/{attempt_uid}', 'User\QuizController@quiz_result');
Route::get('/quiz/{slug}/question/{qUID}', 'User\QuizController@quiz_question');
Route::post('/quiz/{slug}/next-question', 'User\QuizController@next_question');

Route::get('/wordsearch/{slug}', 'User\QuizController@wordsearch');
Route::post('/wordsearch/start', 'User\QuizController@wordsearch_start');
Route::post('/wordsearch/answer', 'User\QuizController@wordsearch_answer');

Route::post('/send-postback', 'User\QuizController@send_postback');

Route::get('/blog', 'User\BlogController@all');
Route::get('/blog/{slug}', 'User\BlogController@view');

Route::get('/author/{username}', 'User\AuthorController@view');

Auth::routes();
