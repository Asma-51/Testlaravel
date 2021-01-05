<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/admin/post',array('as'=>'admin.home',function () {
//  $url=route('admin.home');
//  return "this url is ".$url;  
// }));
//Route::get('/con/{id}','PostController@index');

// Route::resource('post','PostController');

Route::get("/insert",function(){

DB::insert('insert into posts(title,body)values(?,?)',['PHP','Laravel is framework']);

});

Route::get('/update',function(){

    $update=DB::update('update posts set title="PHP and Laravel"where id=1');
    return $update;


});
// Route::get('country','country\CountryController@Country');
// Route::get('country/{id}','country\CountryController@Countrybyid');
// Route::post('country','country\CountryController@Countrysave');
// Route::put('country/{id}','country\CountryController@CountryUpdate');
// Route::delete('country/{id}','country\CountryController@Countrydelete');

Route::resource('country','country\Country');
Route::auth();

Route::get('/home', 'HomeController@index');
