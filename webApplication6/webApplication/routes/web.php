<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/search','searchController@index');/*view search page*/
Route::post('searchAvailability','searchController@searchAvailability');/*check matching and return to reponse of search to see resulst of searching*/

Route::post('/responseOfsearch','searchController@searchAvailability');/*descripe result of searching with book this button*/
Route::get('/bookingreq', 'searchController@book');
//when book this button pressed
Route::post('book','searchController@book');/*has to return view bookingreq  with request form with room info and has to eneter student info then have send request to store student info in the request form table*/
Route::post('sendreq','searchController@sendreq');/*here when button send request press it take student info and store it in the request form table*/
Route::get('/reservation', 'searchController@reservation');



//reporting
Route::get('/reporting','ReportController@index');//viwe report page
Route::post('store','ReportController@store');//to stor report msg in db




   



Route::group(['middleware'=> ['admin']],function(){
    Route::get('admin', function () {
    echo 'You have access!';
    });
});

Route::group(['middleware' => ['api']], function () {
    Route::post('validate/user',[
      'uses' => 'Validation\UserController@user',
    ]);
});



Route::group(['middleware' => ['api']], function () {
    Route::post('validate/user',[
      'uses' => 'Validation\UserController@ValidateForm',
    ]);
});
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']], function() {
  Route::resource('CRUD','appartmentController');
  Route::post ( '/editItem', 'appartmentController@editItem' );
  Route::post ( '/addItem', 'appartmentController@addItem' );
  Route::post ( '/deleteItem', 'appartmentController@deleteItem' );
});

//Route::get('/admin','adminController@showadminPage');

Route::get('/about','aboutController@showAboutPage');
Route::get('/codes','CodeController@showcodePage');
Route::get('/contact','ContactController@showContactPage');
Route::get('/projects','ProjectController@showProjectPage');
Route::get('/services','ServicesController@showServicesPage');
Route::get('/index','indexController@showindexPage');
Route::get('/home','HomeController@showhomePage');
Route::get('/main','mainController@showMainPage');

Auth::routes();

Route::get('/home', 'HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
