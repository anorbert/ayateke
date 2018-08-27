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
Auth::routes();

Route::get('/', 'IndexController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'IndexController@contact');
Route::post('/sendmessage', 'MessageController@sendmessage');
Route::get('/chat', 'MessageController@chat');


Route::post('/addPost', 'PostController@addPost');
Route::get('/story', 'HomeController@story');


//branches
Route::get('/branches', 'IndexController@branches');
Route::get('/showbranche', 'HomeController@showbranche');
Route::post('/addbranche', 'HomeController@addbranche');
Route::get('/details/{id}', 'IndexController@branche_details');
Route::post('/addwss', 'HomeController@addwss');
Route::get('/editbrach/{id}', 'HomeController@editbranch');
Route::post('/editbrache', 'HomeController@editbrache');


//branches
Route::get('/services', 'IndexController@services');




//branches
Route::get('/plofile', 'HomeController@plofile');

//branches
Route::get('/about', 'IndexController@about');


//branches
Route::get('/team', 'IndexController@team');


//branches
Route::get('/post/{id}', 'IndexController@blog');
Route::post('/addcomment/{id}', 'IndexController@addcomment');


//Water request here
Route::get('/water', 'IndexController@water');

Route::post('/request', 'IndexController@request');
Route::get('/requested', 'HomeController@requested');
Route::get('/wss', 'HomeController@wss');
//ajax

Route::get('/fetch','IndexController@fetch');




//anouncements
Route::get('/anouncement', 'HomeController@anouncement');
Route::post('/addanouncement', 'HomeController@addanouncement');


//update plofile
Route::post('/updateplofile', 'HomeController@updateplofile');


//others not specified
Route::post('/Approve/{id}', 'HomeController@approve');
Route::post('/delete/{id}', 'HomeController@decline');




//search data
Route::get('/search', 'IndexController@searchin');

//change user account
Route::get('/manage/{id}', 'HomeController@manage');
Route::get('/admin/{id}', 'HomeController@admin');


//Water leak
Route::get('/leak', 'IndexController@leak');

Route::get('/notification','HomeController@notification');

// Provide report

Route::get('/report', 'HomeController@report');

Route::post('/subscribe', 'IndexController@subscriber');

Route::post('/water/fetch', 'IndexController@fetch')->name('IndexController.fetch');

//notification
Route::get('/notification/{id}', 'IndexController@notification');

Route::get('/about', 'IndexController@about');

// Provide report
Route::get('/users', 'HomeController@schedule');
Route::post('/appointment', 'HomeController@appointment');



//Tarifs And Charges
Route::get('/tarifs', 'IndexController@tarif');


//Payment
Route::get('/payment', 'HomeController@payment');
Route::post('/addpay', 'HomeController@addpay');

//information
Route::get('/information', 'IndexController@information');

//agreement
Route::get('/agreement', 'IndexController@agreement');


Route::get('/findproductsub','IndexController@findproductsub');





