<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\models\matches;
use App\models\teams;

Route::get('/', function () {
    return view('kalendars',['heading'=>'kalendars','matches'=>matches::all(),'teams'=>teams::all()]
);

});