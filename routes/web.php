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

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/welcome','Admin\ContentController@create');

Route::get('/admin/add_client','Admin\ClientController@create')->name('client');
Route::post('/admin/add_client','Admin\ClientController@store')->name('admin.client.store');
Route::get('/admin/online_clients','Admin\ClientController@index');
Route::get('/admin/edit/{id}','Admin\ClientController@edit');
Route::get('/admin/delete_client/{id}','Admin\ClientController@destroy')->name('admin.client.delete');
Route::post('/admin/update_client/{id}','Admin\ClientController@update');


Route::get('/admin/services','Admin\ServiceController@create');
Route::post('/admin/handymen','Admin\ServiceController@store_handymen');
Route::post('/admin/professional','Admin\ServiceController@store_professional');
Route::post('/admin/companies','Admin\ServiceController@store_companies');

Route::get('/admin/app_services','Admin\App_ServicesController@create');
Route::post('/admin/app_services','Admin\App_ServicesController@store');

Route::get('/admin/cover_home','Admin\CoverController@create');
Route::post('/admin/cover_home','Admin\CoverController@storeimg');

Route::post('/admin/cover_img','Admin\CoverController@store_coverimg');
Route::post('/admin/cover_content','Admin\CoverController@store_content');

Route::get('/admin/welcome','Admin\ContentController@create');
Route::post('/admin/welcome','Admin\ContentController@store');

Route::get('/admin/feature','Admin\FeaturesController@create');
Route::post('/admin/feature_section','Admin\FeaturesController@store_section');
Route::post('/admin/feature_img','Admin\FeaturesController@store_img');



Route::get('/admin/contact_us','Admin\ContactUSController@create');
Route::post('/admin/contact_us','Admin\ContactUSController@store');

Route::get('/admin/android','Admin\AndroidController@create');
Route::post('/admin/android','Admin\AndroidController@store');

Route::get('/admin/ios','Admin\IosController@create');
Route::post('/admin/ios','Admin\IosController@store');

Route::get('/admin/cover_blog','Admin\CoverBlogController@create');
Route::post('/admin/cover_blog','Admin\CoverBlogController@store');

Route::get('/admin/add_blog','Admin\BlogController@create');
Route::post('/admin/add_blog','Admin\BlogController@store');
Route::get('/admin/all_blog','Admin\BlogController@index');
Route::get('/admin/edit_blog/{id}','Admin\BlogController@edit');
Route::get('/admin/delete/{id}','Admin\BlogController@destroy');
Route::post('/admin/update_blog/{id}','Admin\BlogController@update');

Route::get('/admin/msg','Admin\MsgController@index');


});


///////////////////Route User
Route::group(['middleware' => 'user'], function () {

Route::get('/user/worker','User\UserController@index_handyman');
Route::get('/user/employee','User\UserController@index_professional');
Route::get('/user/co_owners','User\UserController@index_companies');

Route::get('/user/blog','User\UserController@index_page');
Route::get('/user/blog/{id}','User\UserController@show');
Route::get('/user/download','User\UserController@index');
Route::get('/user/sahla','User\UserController@index_sahla');
Route::post('/user/sahla','User\UserController@store_msg');
});



Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');








/*==Route::get('/login','Auth\LoginController@create_login');
Route::post('/login','Auth\LoginController@check_login');*/

Route::get('/test','TestController@create')->name('test');
Route::post('/test','TestController@store')->name('test');


/*Route::get('/email','EmailController@create')->name('email');
Route::post('/send', 'EmailController@send');*/

Route::get('/emailtest', 'EmailController@mail');









//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
