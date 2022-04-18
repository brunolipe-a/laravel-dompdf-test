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
    // $reproved = request()->has('reproved');

    $json = json_decode(file_get_contents(storage_path('reportPrimary2022-04-18625d67686222c.json')));

    $extraData = $json->reports->DadosAdicionais;
    $data = collect($json->reports->data)->take(50);

    // dd($extraData, $data);

    // return view('pdf.invoice', compact('data', 'extraData'), ['pdf' => false]);

    return Pdf::loadView('pdf.invoice', compact('data', 'extraData'))->stream('invoice.pdf');
});
