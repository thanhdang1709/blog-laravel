<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\User;
use App\Jobs\SendWelcomeEmail;
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
Route::get('/queue', function(){
	$user = User::first();
	dispatch(new SendWelcomeEmail($user));
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
Route::group([
    'name' => 'admin.', 
    'prefix' => 'admin', 
    'middleware' => 'auth'
], function () {
   Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
   Route::resource('/post', 'Admin\PostController')->except(['store','destroy']);//index,show/create/update/edit/
   Route::post('/post/create', 'Admin\PostController@postCreate')->name('admin.post.create');
   Route::post('/post/{id}/delete', 'Admin\PostController@delete')->name('admin.post.delete');

});


