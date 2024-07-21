<?php
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('app');
});

Route::get('/train',[TrainController::class,'index'])->name('train.index');