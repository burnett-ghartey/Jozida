<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Service;
use App\Models\Project;


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







Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', 'App\Http\Controllers\PageController@index');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/services', 'App\Http\Controllers\PageController@services');
Route::get('/projects', 'App\Http\Controllers\PageController@projects');
Route::get('/contact', 'App\Http\Controllers\PageController@contact');
Route::get('/news', 'App\Http\Controllers\PageController@news');






Route::group(['middleware'=>['auth','admin']], function(){
   Route::get('/admin',function(){
    $users = User::all();
    $articles = Article::all();
    $services = Service::all();
    $projects = Project::all();
    return view('admin.index', compact('users', 'articles', 'services', 'projects'));
});
Route::resource('/admin/users', 'App\Http\Controllers\AdminUsersController');
Route::resource('/admin/articles', 'App\Http\Controllers\ArticlesController');
Route::resource('/admin/services', 'App\Http\Controllers\ServiceController');
Route::resource('/admin/projects', 'App\Http\Controllers\ProjectController');
Route::get('/article/delete/{id}', 'App\Http\Controllers\ArticlesController@destroy')
     ->name('article.destroy');
Route::get('/service/delete/{id}', 'App\Http\Controllers\ServiceController@destroy')
     ->name('service.destroy');
Route::get('/user/delete/{id}', 'App\Http\Controllers\AdminUsersController@destroy')
     ->name('user.destroy');
Route::get('/project/delete/{id}', 'App\Http\Controllers\ProjectController@destroy')
     ->name('project.destroy');


});





Route::post('/articles/actions', 'App\Http\Controllers\ArticlesController@actions');
Route::post('/services/actions', 'App\Http\Controllers\ServiceController@actions');
Route::post('/projects/actions', 'App\Http\Controllers\ProjectController@actions');
Route::post('/send', 'App\Http\Controllers\ContactMailController@contactSendMail');
Route::get('/news/{slug}', function($slug){
     $article = Article::where('slug', $slug)->first();;
     $latests = Article::latest()->take(3)->get();
     return view('news-single', compact('article', 'latests'));

});



