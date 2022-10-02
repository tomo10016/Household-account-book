<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmallCategory_expenditure extends Model
{
    public function expenditures()
    {
        return $this->hasMany('App\Expenditure');
    }
}
