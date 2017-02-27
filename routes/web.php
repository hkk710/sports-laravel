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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::post('/send', 'HomeController@send');
Route::get('/registernow', 'RegisterController@index');
Route::post('/registernow', 'RegisterController@create');
Route::get('/register', 'RegisterController@show');
Route::get('/cricket', 'CricketController@index');
Route::post('/cricket', 'CricketController@create');
Route::get('/webteam', 'webteamController@index');
Route::get('/result_view', 'ResultsController@show_ind');
Route::get('/result_view/{gender}/{id}', 'ResultsController@show_ind_form')->name('result.ind');
Route::get('/result_view/group', 'ResultsController@show_group');
Route::get('/score/male', 'ScoreController@male');
Route::get('/score/female', 'ScoreController@female');
Route::get('/score/group/{department}', 'ScoreController@group');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/results', 'ResultsController@index');
    Route::post('/results', 'ResultsController@create');
    Route::post('/results/create', 'ResultsController@store');
    Route::post('/results/group', 'ResultsController@group');
    Route::post('/results/group/create', 'ResultsController@groupstore');
    Route::get('/print', 'RegisterController@pindex');
    Route::get('/print/{id}', 'RegisterController@pshow')->name('print.show');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
