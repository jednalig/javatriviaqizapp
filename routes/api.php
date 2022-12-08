<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});