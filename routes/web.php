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
// Route::get('/signin/{id}/{name}',function($id,$name){
//     return 'This is user'.$id.'name is'.$name;
// });
// Route::get('/', function (){
//     return view('pages.index');
// });
//Route::get('/','PagesController@index');
Route::get('/',function(){
    return view('welcome');
});

Route::get('/register','Auth\RegisterController@create');
// Auth::routes(['verify' => true]);
// Route::get('/profile', function () {
//     return '<h1>This is profile page</h1>';
// })->middleware('verified');
Auth::routes();
Route::get('/login', 'Auth\LoginController@redirectTo');
Route::get('/logout','Auth\LoginController@logout');
Route::resource('/info','InfoController');
Route::get('/datafilling','Controller@check');
Route::resource('/borrowers','BorrowersController');
Route::resource('/recommenders','RecommenderController');

Auth::routes();



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

Route::get('/home', 'HomeController@index')->name('home');
