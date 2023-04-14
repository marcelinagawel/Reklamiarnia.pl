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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'index.layout', 'uses' => 'IndexController@index']);
Route::get('/kontakt', ['as' => 'index.layout', 'uses' => 'ContactController@index']);

Route::get('/oferta', ['as' => 'index.offer', 'uses' => 'OfferController@index']);
Route::get('/oferta/{offer_name}', ['as' => 'index.offers', 'uses' => 'OfferController@readMore']);

Route::get('/nasze-realizacje', ['as' => 'index.project', 'uses' => 'OurProjectsController@index']);
Route::get('/nasze-realizacje/{project_name}', ['as' => 'index.projects', 'uses' => 'OurProjectsController@readMore']);

Route::get('/zaufali-nam', ['as' => 'index.layout', 'uses' => 'TrustedController@index']);
