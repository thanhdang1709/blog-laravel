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

Route::get('/', 'FrontHomeController@index');
Route::get('/post/{slug}', 'FrontHomeController@single');
Route::get('/category/{slug}', 'FrontHomeController@filterCategory');
Route::get('/search/{slug}', 'FrontHomeController@search');
Route::get('/tag/{slug}', 'FrontHomeController@filterTag');

Route::get('/about', 'FrontHomeController@about')->name('about');
Route::get('/contact', 'FrontHomeController@contact')->name('contact');

Auth::routes();


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
   Route::resource('/category', 'Admin\CategoryController')->except(['destroy']);//index,show/create/update/edit/store
   Route::post('/category/{id}/delete', 'Admin\CategoryController@delete')->name('admin.category.delete');
   Route::post('/post/create', 'Admin\PostController@postCreate')->name('admin.post.create');
   Route::get('/post/{id}/delete', 'Admin\PostController@delete')->name('admin.post.delete');

});

/*Route::get('/c', function(){
  $category = Category::find(4);
  $posts = ($category->posts);
  foreach ($posts as $key => $value) {
   echo $value->slug;
  }
});*/


Route::get('/queue', function(){
  $user = User::first();
  dispatch(new SendWelcomeEmail($user));
});




Route::fallback(function(){
  return view('front.404');
});