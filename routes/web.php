<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/helloworld', function () {
    try {
        // Ejecuta una consulta de prueba
        DB::connection();
         return response()->json([
            'message' => 'Hello World!',
            'db_connection' => 'OK'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Hello World!',
            'db_connection' => 'FAILED',
            'error' => $e->getMessage()
        ]);
    }
});
