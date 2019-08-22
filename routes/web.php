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
    return view('home');
});
Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::resource('/info','InfoController');
Route::get('/datafilling','Controller@check');
Route::resource('/borrowers','BorrowersController');
Route::resource('/recommenders','RecommenderController');
Route::get('/result','Controller@check');

