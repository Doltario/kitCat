<?php

use Illuminate\Http\Request;

use App\Cat;
use App\Http\Resources\CatCollection;
use App\Http\Resources\Cat as CatResource;

use App\LoofDocument;
use App\Http\Resources\LoofDocumentCollection;
use App\Http\Resources\LoofDocument as LoofDocumentResource;

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

Route::get('/cats', function () {
    return new CatCollection(Cat::paginate());
});

Route::get('/cats/{cat}', function (Cat $cat) {
    return new CatResource($cat);
});

// ----------------------------- ||
// -- LoofDocuments endpoints -- ||
// ----------------------------- ||

Route::resource('loofDocuments', 'LoofDocumentController')->only(['store', 'destroy']);

Route::get('/documents/loof/{id}', function ($id) {
    return new LoofDocumentResource(LoofDocument::find($id));
});

Route::get('/documents/loof', function () {
    return new LoofDocumentCollection(LoofDocument::paginate());
});
