<?php

use App\Http\Controllers\MahasiswaBaru;
use Illuminate\Support\Facades\Route;

Route::get('/', 'MahasiswaController@home') -> name ('home');
Route::get('artikel', 'MahasiswaController@artikel') -> name ('mahasiswa');