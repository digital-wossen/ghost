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






  Route::get('/','PagesController@index' );
  Route::get('/company','PagesController@about' );
  //Route::get('/services','PagesController@services' );
  Route::get('/contacts','PagesController@contacts' );

  Route::resource('post','PostsController');
  Route::get('post/create','PostsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get("/main_content", function()
{
   return View::make("/pages/main_content");
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services',function(){
    $config['center'] = 'Air Canada Center, Toronto';
    $config['zoom'] = '18';
    $config['map_height'] = '1100px';
    $config['map_width'] = '470px';
    $config['scrollwheel'] = False;

    GMaps::initialize($config);

    $map = GMaps::create_map();


    return view('/pages.services')->with('map',$map);
});
