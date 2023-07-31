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
});

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact');
Route::get('/help', 'HomeController@help');
Route::get('/about', 'HomeController@about');

Route::get('/menu/{food}', 'DetailController@index');

Route::get('/detail/recipes/{food}', 'DetailController@recipes');
Route::get('/detail/locations/{food}', 'DetailController@locations');
Route::get('/detail/reviews/{food}', 'DetailController@reviews');

Route::get('/recipes', 'RecipeController@get');
Route::get('/recipes/detail', 'RecipeController@detail');
Route::post('/recipes/save', 'RecipeController@save');

Route::get('/review-foods', 'ReviewFoodController@get');
Route::post('/review-food/save', 'ReviewFoodController@save');

Route::get('/location', 'LocationController@get');
Route::post('/location/save', 'LocationController@save');

Route::get('/location-review', 'LocationReviewController@get');
Route::post('/location-review/save', 'LocationReviewController@save');

Route::get('/masakan', 'FoodController@get');
Route::post('/masakan/save', 'FoodController@save');
