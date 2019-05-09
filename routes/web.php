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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index');
Route::get('/upload','HomeController@uploadIndex');
Route::post('/upload',['as'=>'upload.store','uses'=>'HomeController@store']);

Route::resources(['staff'=>'StaffController']);
Route::get('/staff_notification',['as'=>'staff.notification','uses'=>'StaffController@Notification']);
Route::get('staffsearch',['as'=>'staff.search', 'uses'=> 'StaffController@search']);

Route::resources(['customer'=>'CustomerController']);
Route::resources(['warehouse'=>'WarehouseController']);
Route::resources(['item'=>'ItemController']);
Route::get('itemsearch',['as'=>'item.search', 'uses'=> 'ItemController@search']);
Route::get('itemsearchAll',['as'=>'item.search.All', 'uses'=> 'ItemController@searchAll']);
Route::resources(['department'=>'DepartmentController']);
Route::resources(['itemown'=>'ItemOwnController']);
Route::resources(['post'=>'PostController']);
Route::get('postDo/{id}',['as'=>'post.show', 'uses'=> 'PostController@show']);
Route::get('postDo/{id}/accept',['as'=>'post.accept', 'uses'=> 'PostController@accept']);
Route::post('postDo/accepted',['as'=>'post.accepted','uses'=>'PostController@accepted']);
Route::get('statistic/post',['as'=>'post.statistic','uses'=>'PostController@statistic']);

Route::get('deal',['as'=>'deal.index', 'uses'=> 'DealController@index']);
Route::get('deal/import',['as'=>'deal.import', 'uses'=> 'DealController@import']);
Route::post('deal/import',['as'=>'deal.import.store', 'uses'=> 'DealController@importStore']);
Route::get('deal/import/{id}',['as'=>'deal.import.show', 'uses'=> 'DealController@importShow']);
Route::put('deal/import/{id}',['as'=>'deal.import.update', 'uses'=> 'DealController@importUpdate']);
Route::delete('deal/import/{id}',['as'=>'deal.import.delete', 'uses'=> 'DealController@importDelete']);
Route::post('dealDetail/import',['as'=>'dealdetail.import.store', 'uses'=> 'DealController@detailStore']);

Route::resources(['location'=>'LocationController']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
