<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $fillable = [
        'year', 'month', 'day', 'nominal', 'bigcategory', 'smallcategory', 'money', 'shop', 'method',
        
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->paginate($limit_count);
    }
}
