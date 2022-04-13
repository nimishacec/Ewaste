<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\AdminController;

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

//route::get('/admin',[AdminController::class,"show"]);
//route::get('/redirects',[HomeController::class,"sell"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin',function()
{
return view('admin');
});
Route::get('/user',function()
{
return view('user');
});

Route::get('/home',function()
{
return view('index');
});

route::get('/redirects',[HomeController::class,"index"]);
//Route::get('admin1', function () {
  //  return view('admin1')});
Route::get('records','AdminController@index');
//Route::get('records','AdminController@index1');

//route::get('/admin',[AdminController::class,"index"]);
//Route::get('/sell',function()
//{
//return view('sell');
//});


//Route::get('/list','SellerController@list');

//route::get('/list',[SellersController::class,"list"]);Route::get('/dynamic_dependent', 'DynamicDependent@index');

//Route::get('/sellerview', 'Dropdown@index');

//Route::post('sellerview/fetch', 'Dropdown@fetch')->name('dynamicdependent.fetch');
