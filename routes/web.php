<?php

use Barryvdh\DomPDF\Facade\Pdf;
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
    $reproved = request()->has('reproved');

    return view('pdf.invoice', compact('reproved'));
});

Route::get('pdf', function () {
    $reproved = request()->has('reproved');

    return Pdf::loadView('pdf.invoice', compact('reproved'))->stream('invoice.pdf');
});
