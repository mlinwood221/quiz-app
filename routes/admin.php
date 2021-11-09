<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::get('/login', 'LoginController@index');
Route::get('/logout', 'LoginController@logout');
Route::post('/login', 'LoginController@login');

Route::group(['middleware' => 'guest:admin'], function() {
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
    
    // Upload/Remove image ajax
    Route::post('/upload_image', 'DashboardController@upload_image');
    Route::post('/remove_image', 'DashboardController@remove_image');
    
    // Author
    Route::get('/author/all', 'AuthorController@all');
    Route::get('/author/add', 'AuthorController@add');
    Route::get('/author/edit/{author_id}', 'AuthorController@edit');
    Route::get('/author/view/{author_id}', 'AuthorController@view');
    Route::post('/author/create_or_edit_action', 'AuthorController@create_or_edit_action');
    Route::get('/author/delete/{author_id}', 'AuthorController@delete');
    Route::post('/author/auto-assign', 'AuthorController@auto_assign');

    // Category
    Route::get('/category/all', 'CategoryController@all');
    Route::get('/category/add', 'CategoryController@add');
    Route::get('/category/edit/{category_id}', 'CategoryController@edit');
    Route::get('/category/view/{category_id}', 'CategoryController@view');
    Route::post('/category/create_or_edit_action', 'CategoryController@create_or_edit_action');
    Route::get('/category/delete/{category_id}', 'CategoryController@delete');
    
    // Quiz
    Route::get('/quiz/all', 'QuizController@all');
    Route::get('/quiz/add', 'QuizController@add');
    Route::get('/quiz/edit/{quiz_id}', 'QuizController@edit');
    Route::get('/quiz/view/{quiz_id}', 'QuizController@view');
    Route::post('/quiz/create_or_edit_action', 'QuizController@create_or_edit_action');
    Route::get('/quiz/delete/{quiz_id}', 'QuizController@delete');

    // Question
    Route::get('/quiz/{quiz_id}/all', 'QuestionController@all');
    Route::get('/quiz/{quiz_id}/add', 'QuestionController@add');
    Route::get('/quiz/{quiz_id}/edit/{question_id}', 'QuestionController@edit');
    Route::get('/quiz/{quiz_id}/view/{question_id}', 'QuestionController@view');
    Route::post('/quiz/{quiz_id}/create_or_edit_action', 'QuestionController@create_or_edit_action');
    Route::get('/quiz/{quiz_id}/delete/{question_id}', 'QuestionController@delete');

    // Blog
    Route::get('/blog/all', 'BlogController@all');
    Route::get('/blog/add', 'BlogController@add');
    Route::get('/blog/edit/{quiz_id}', 'BlogController@edit');
    Route::get('/blog/view/{quiz_id}', 'BlogController@view');
    Route::post('/blog/create_or_edit_action', 'BlogController@create_or_edit_action');
    Route::get('/blog/delete/{quiz_id}', 'BlogController@delete');

    // Postback Logs
    Route::get('/postback-logs/all', 'PostbackLogController@all');

    // Html Section
    Route::get('/html-section/all', 'HtmlSectionController@all');
    Route::get('/html-section/add', 'HtmlSectionController@add');
    Route::get('/html-section/edit/{section_id}', 'HtmlSectionController@edit');
    Route::get('/html-section/view/{section_id}', 'HtmlSectionController@view');
    Route::post('/html-section/create_or_edit_action', 'HtmlSectionController@create_or_edit_action');
    Route::get('/html-section/delete/{section_id}', 'HtmlSectionController@delete');

    // Ads
    Route::get('/ads', 'AdsController@view');
    Route::post('/ads/edit_action', 'AdsController@edit_action');

    // Account
    Route::get('/profile', 'AccountController@index');
    Route::post('/profile/save-settings', 'AccountController@save_profile');
});
