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

Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});

Route::get('/onlineclass','\App\Http\Controllers\OnlineclassController@index');
Route::post('/onlineclass/create','\App\Http\Controllers\OnlineclassController@create');
Route::get('/onlineclass/{id}/edit','\App\Http\Controllers\OnlineclassController@edit');
Route::post('/onlineclass/{id}/update','\App\Http\Controllers\OnlineclassController@update');
Route::get('/onlineclass/{id}/delete','\App\Http\Controllers\OnlineclassController@delete');


?>