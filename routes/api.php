<?php

use Illuminate\Http\Request;
use App\Http\Resources\Cat as CatResource;
use App\Http\Resources\LoofDocument asRessource LoofDocumentResource;
use App\Cat;
use App\LoofDocument;
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

// ---------------------------- ||
// ------ Cats endpoints ------ ||
// ---------------------------- ||

Route::resource('cats', 'CatController')->only(['store', 'update', 'destroy']);

Route::get('/cats/{id}', function ($id) {
    return new CatResource(Cat::find($id));
});

Route::get('/cats', function () {
    return new CatResource(Cat::paginate());
});


// ----------------------------- ||
// -- LoofDocuments endpoints -- ||
// ----------------------------- ||

Route::resource('loofDocuments', 'LoofDocumentController')->only(['store', 'destroy']);

Route::get('/documents/loof/{id}', function ($id) {
    return new LoofDocumentRessource(LoofDocument::find($id));
});

Route::get('/documents/loof', function () {
    return new LoofDocumentResource(LoofDocument::paginate());
});
