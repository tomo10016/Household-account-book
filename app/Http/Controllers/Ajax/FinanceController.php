<?php

namespace App\Http\Controllers\Ajax;

use App\Expenditure;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(Request $request)
    {
        return \App\Expenditure::select('smallcategory_id', 'money')
            ->where('date', $request->date)
            ->get();
    }
    
    public function years()
    {
        return \App\Expenditure::select(\DB::raw('DATE_PART(\'YEAR\', date) AS YEAR'))
            ->where('date', '<=', 'now()')
            ->orderBy('date', 'desc')
            ->pluck('year', 'year');
    }
}
