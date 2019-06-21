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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/index', 'virtualController@index');

Route::get('/', 'virtualController@index');
Route::get('/first', 'virtualController@loggin');

Route::get('/front2', 'virtualController@front2');
Route::get('/classhome', 'virtualController@classhome');
// Route::get('/hey', function () {
//     return "hello World! in web hey";
// });
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('posts','PostsController');

Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\AdminloginController@showLoginForm')->name('admin.login');
    Route::get('/login','Auth\AdminloginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});


