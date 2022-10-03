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
Route::post('/incomes', 'FinanceController@store_income');
Route::get('/register/register_expenditure', 'FinanceController@register_expenditure');
Route::post('/expenditures', 'FinanceController@store_expenditure');
Route::get('/show', 'FinanceController@show');
Route::get('/show/show_income', 'FinanceController@show_income');
Route::get('/incomes/{income}/edit_income', 'FinanceController@edit_income');
Route::put('/incomes/{income}', 'FinanceController@update_income');
Route::delete('/incomes/{income}/delete_income', 'FinanceController@delete_income');
Route::get('/show/show_expenditure', 'FinanceController@show_expenditure');
Route::get('/expenditures/{expenditure}/edit_expenditure', 'FinanceController@edit_expenditure');
Route::put('/expenditures/{expenditure}', 'FinanceController@update_expenditure');
Route::delete('/expenditures/{expenditure}/delete_expenditure', 'FinanceController@delete_expenditure');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
