<?php

namespace App\Http\Controllers;

use App\Category_income;
use App\Expenditure;
use App\Income;
use App\BigCategory_expenditure;
use App\SmallCategory_expenditure;
use App\PaymentMethod;
use App\Http\Requests\IncomeRequest;
use App\Http\Requests\ExpenditureRequest;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
     public function record()
    {
        return view('record');
    }
    
    public function record_income(Category_income $category)
    {
        return view('record_income')->with(['categories' => $category->get()]);
    }
    
    public function store_income(IncomeRequest $request, Income $income)
    {
        $input = $request['income'];
        $income->create($input);
        return redirect('/show/show_income');
    }
    
    public function record_expenditure(Bigcategory_expenditure $bigcategory, Smallcategory_expenditure $smallcategory, PaymentMethod $method)
    {
        return view('record_expenditure')->with(['bigcategories' => $bigcategory->get(), 'smallcategories' => $smallcategory->get(), 'methods' => $method->get()]);
    }
    
    public function store_expenditure(ExpenditureRequest $request, Expenditure $expenditure)
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
    
    public function edit_income(Income $income, Category_income $category)
    {
        return view('edit_income')->with(['income' => $income, 'categories' => $category->get()]);
    }
    
    public function update_income(IncomeRequest $request, Income $income)
    {
        $input_income = $request['income'];
        $income->fill($input_income)->save();
        
        return redirect('/show/show_income');
    }
    
    public function delete_income(Income $income)
    {
        $income->delete();
        return redirect('/show/show_income');
    }
    
    public function show_expenditure(Expenditure $expenditure)
    {
        return view('show_expenditure')->with(['expenditures' => $expenditure->getPaginateByLimit()]);
    }
    
    public function edit_expenditure(Expenditure $expenditure)
    {
        return view('edit_expenditure')->with(['expenditure' => $expenditure]);
    }
    
    public function update_expenditure(ExpenditureRequest $request, Expenditure $expenditure)
    {
        $input_expenditure = $request['expenditure'];
        $expenditure->fill($input_expenditure)->save();
        
        return redirect('/show/show_expenditure');
    }
    
    public function delete_expenditure(Expenditure $expenditure)
    {
        $expenditure->delete();
        
        return redirect('/show/show_expenditure');
    }
    
    public function breakdown_expenditure()
    {
        return  view('breakdown/breakdown_expenditure');
    }
}
