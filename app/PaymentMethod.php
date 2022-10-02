<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function expenditures()
    {
        return $this->hasMany('App\Expenditure');
    }
}
