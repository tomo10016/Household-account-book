<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigCategory_expenditure extends Model
{
    public function bigcategories()
    {
        return $this->hasMany('App\Expenditure');
    }
}
