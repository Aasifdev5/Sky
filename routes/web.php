<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/Overview', function () {
    return view('Overview');
});
Route::get('/Billing', function () {
    return view('Billing');
});
Route::get('/Settings', function () {
    return view('Settings');
});
Route::get('/Statements', function () {
    return view('Statements');
});
Route::get('/Payment', function () {
    return view('Payment');
});
Route::get('/Deep', function () {
    return view('Deep');
});
Route::get('/Machine', function () {
    return view('Machine');
});
Route::get('/PurchaseTime', function () {
    return view('PurchaseTime');
});
Route::get('/Hybrid', function () {
    return view('Hybrid');
});
Route::get('/TimeSeries', function () {
    return view('TimeSeries');
});
Route::get('/PurchaseHybrid', function () {
    return view('PurchaseHybrid');
});
Route::get('/PurchaseDeep', function () {
    return view('PurchaseDeep');
});
Route::get('/PurchaseMachine', function () {
    return view('PurchaseMachine');
});
Route::get('/ContinuePremium', function () {
    return view('ContinuePremium');
});
Route::get('/ContinueStandard', function () {
    return view('ContinueStandard');
});
Route::get('/ContinueBasic', function () {
    return view('ContinueBasic');
});
Route::get('/DataAnalysis', function () {
    return view('DataAnalysis');
});
Route::get('/DataVisualization', function () {
    return view('DataVisualization');
});
Route::get('/DiseasesPrediction', function () {
    return view('DiseasesPrediction');
});
Route::get('/ExcelVisualization', function () {
    return view('ExcelVisualization');
});
Route::get('/PowerBi', function () {
    return view('PowerBi');
});
Route::get('/Data_science_ai', function () {
    return view('Data_science_ai');
});
Route::get('/ContinueBasic', function () {
    return view('ContinueBasic');
});