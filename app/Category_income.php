<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_income extends Model
{
    public function incomes()
    {
        return $this->hasMany('App\Income');
    }
}
