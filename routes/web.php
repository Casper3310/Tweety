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
    
    return view('index');
});

Route::get('line','TweetyController@test')->name('line_Notify');

Route::get('email','EmailController@show')->name('email');
Route::post('email/raw','EmailController@email_raw')->name('email_send_raw');
Route::post('email/html','EmailController@email_VerifyMail')->name('email_send_VerifyMail');
Route::post('email/markdown','EmailController@email_markdown')->name('email_send_markdown');

Route::get('messagebord/show','Message_bordController@show')->name('messagebord');
Route::post('messagebord/store','Message_bordController@store')->name('store_messagebord');
Route::get('messagebord/{id}/edit','Message_bordController@edit')->name('edit_messagebord');
Route::put('messagebord/update','Message_bordController@update')->name('update_messagebord');
Route::delete('messagebord/delete','Message_bordController@delete')->name('delete_messagebord');

Route::get('register', function(){return view('auth.register');})->name('register');
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('tweety', 'TweetyController@index')->name('home');
    Route::post('tweety', 'TweetyController@store')->name('store_tweety');
    Route::get('/explore', 'ExploreController')->name('explore');;
    Route::post('porfiles/{user:user_name}/follow', 'FollowsController@store')->name('follow');
    Route::get('porfiles/{user:user_name}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('porfiles/{user:user_name}', 'ProfilesController@update')->middleware('can:edit,user');
    Route::post('tweety/{tweety:id}/like', 'TweetyLikeController@store')->name('like');
    Route::delete('tweety/{tweety:id}/like', 'TweetyLikeController@destory')->name('dislike');
    Route::post('logout', function(){ 
        Auth::logout();
        return view('welcome');})->name('logout');
});

Route::get('porfiles/{user:user_name}', 'ProfilesController@show')->name('profile');


/*GET – 取得資源
POST – 新增一筆資源
PUT – 更新一筆資源
Patch – 更新一筆資源的部分內容
Delete – 刪除一筆資源
Options – 取得Server支援的Request Types有哪些*/

/*
//連線資料庫
function link_db($host,$dbuser,$dbpw,$db_name)
{
    //建立連線
    $link = mysqli_connect($host,$dbuser,$dbpw,$db_name);
    //檢查連線
    if ($link) 
    {
        mysqli_set_charset($link,"SET NAME UTF-8");
        echo "資料庫連線成功";
    }
    else
    {
        echo "資料庫連線失敗" . mysqli_connect_errno();
    }
    return $link;
}*/