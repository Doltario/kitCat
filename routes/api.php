<?php

use Illuminate\Http\Request;
use App\Http\Resources\Cat as CatResource;
use App\Cat;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('cats', 'CatController')->only(['store', 'update', 'destroy']);

Route::get('/cat/{id}', function ($id) {
    return new CatResource(Cat::find($id));
});

Route::get('/cats', function () {
    return new CatResource(Cat::paginate());
});
