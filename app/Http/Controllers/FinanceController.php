<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function register_income()
    {
        return view('register_income');
    }
    public function register_expenditure()
    {
        return view('register_expenditure');
    }
}
