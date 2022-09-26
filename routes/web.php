<?php

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

Route::get('/', "FinanceController@index");
Route::get('/register', 'FinanceController@register');
Route::get('/register/register_income', 'FinanceController@register_income');
Route::get('/register/register_expenditure', 'FinanceController@register_expenditure');
