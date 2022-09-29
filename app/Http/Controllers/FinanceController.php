<?php

namespace App\Http\Controllers;

use App\Income;
use App\Expenditure;
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
    
    public function store_income(Request $request, Income $income)
    {
        $input = $request['income'];
        $income->create($input);
        return redirect('/show/show_income');
    }
    
    public function register_expenditure()
    {
        return view('register_expenditure');
    }
    
    public function store_expenditure(Request $request, Expenditure $expenditure)
    {
        $input = $request['expenditure'];
        $expenditure->create($input);
        return redirect('/show/show_expenditure');
    }
    
    public function show()
    {
        return view('show');
    }
    
    public function show_income(Income $income)
    {
        return view('show_income')->with(['incomes' => $income->getPaginateByLimit()]);
    }
    
    public function show_expenditure(Expenditure $expenditure)
    {
        return view('show_expenditure')->with(['expenditures' => $expenditure->getPaginateByLimit()]);
    }
    
   
}
