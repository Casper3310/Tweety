<?php

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('tweety', 'TweetyController@index')->name('home');
    Route::post('tweety', 'TweetyController@store');
    Route::get('/explore', 'ExploreController')->name('explore');;
    Route::post('porfiles/{user:user_name}/follow', 'FollowsController@store')->name('follow');
    Route::get('porfiles/{user:user_name}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('porfiles/{user:user_name}', 'ProfilesController@update')->middleware('can:edit,user');
    Route::post('tweety/{tweety:id}/like', 'TweetyLikeController@store')->name('like');
    Route::delete('tweety/{tweety:id}/like', 'TweetyLikeController@destory')->name('dislike');
});

Route::get('porfiles/{user:user_name}', 'ProfilesController@show')->name('profile');


