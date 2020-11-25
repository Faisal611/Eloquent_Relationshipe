<?php

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
//User create
Route::get ('user_create','RelationController@userCreate');

//address create
Route::get ('address_create','RelationController@addressCreate');


// 26,50 address Tag
Route::get ('tag_create','RelationController@tagCreate');



//create post
Route::get('post_create','RelationController@postCreate');

//all data show
Route::get('all_Data_Show','RelationController@allDataShow');

//one to one
Route::get('one_to_one','RelationController@oneToOne');

//one to one inverse
Route::get('one_to_one_inverse','RelationController@oneToOneInverse');

//one to many
Route::get('one_to_many','RelationController@oneToMany');

//one to many Inverse
Route::get('one_to_many_inverse','RelationController@oneToManyInverse');


// 26,50-> many to many
Route::get('many_to_many','RelationController@manyToMany');

Route::get('sync_create','RelationController@syncCreate');
