<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;
use DB;

class ExpenditureGoogleGraph extends Controller
{
    public function index(Expenditure $expenditure)
    {
        $data = Expenditure::select('smallcategory_id', 'money')
                ->groupBy('smallcategory_id')
                ->get();
        /*
        $data = DB::table('expenditures')
                ->select(
                    DB::raw('money'),
                    DB::raw('smallcategory_id'))
                    ->groupBy('money, smallcategory_id')
                ->get();
        */
        
        $array[] = ['SmallCategory', 'Money'];
        
        foreach ($data as $key => $expenditure)
        {
            $array[++$key] = [$expenditure->smallcategory->name, $expenditure->money];
        }
        
        return view('/breakdown/breakdown_expenditure')->with('smallcategory_id', json_encode($array));
    }
}
