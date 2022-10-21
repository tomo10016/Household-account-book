<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;
use DB;

class ExpenditureGoogleGraph extends Controller
{
    public function index(Expenditure $expenditure)
    {
        $data = Expenditure::select('smallcategory_id')
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
        
        foreach ($data as $key => $value)
        {
            $array[++$key] = [$value->smallcategory->name, $value->money];
        }
        
        return view('/breakdown/breakdown_expenditure')->with('smallcategory', json_encode($array));
    }
}
