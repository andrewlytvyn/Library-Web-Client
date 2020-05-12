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
Route::redirect('/', 'search');
Route::get('search', 'SearchController@index')->name('search');
Route::post('search', 'DocumentController@index');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Auth::routes(['register' => false]);

Route::get('book/{id}', 'DocumentController@show')->name('book.show');
Route::get('profile/{id}', 'UserController@show')->name('profile.show');


Route::get('users', 'UserController@index');


