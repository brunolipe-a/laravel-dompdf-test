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

Route::get('sale-order', function () {
    // $reproved = request()->has('reproved');

    $json = json_decode(file_get_contents(storage_path('RelatorioPedidoVenda2022-04-18625d69d6f0f4d.json')));

    $extraData = $json->reports->DadosAdicionais;
    $order = $json->reports->data->fatherOrder;
    $products = collect($json->reports->data->fatherOrder->products);

    // $order->tax_observation = Faker\Factory::create()->words(400, true);

    // $products = $products->merge($products);

    // dd($extraData, $products, $order);

    // dd($extraData, $data);

    // return view('pdf.sale-order', compact('extraData', 'products', 'order'), ['pdf' => false]);

    return Pdf::loadView('pdf.sale-order', compact('extraData', 'products', 'order'))->stream('sale-order.pdf');
});
