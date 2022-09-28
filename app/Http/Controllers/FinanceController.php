<?php

namespace App\Http\Controllers;

use App\Incomes;
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
    
    public function show()
    {
        return view('show');
    }
    
    public function show_income(Incomes $income)
    {
        return view('show_income')->with(['incomes' => $income->getPaginateByLimit()]);
    }
    
    public function show_expenditure()
    {
        return view('show_expenditure');
    }
    
   
}
