<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;
use DB;

class ExpenditureGoogleGraph extends Controller
{
    public function index()
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
        
        foreach ($data as $key => $smallcategory)
        {
            $array[++$key] = [$smallcategory->smallcategory->name, $smallcategory->money];
        }
        
        return view('/breakdown/breakdown_expenditure')->with('smallcategory', json_encode($array));
    }
}
