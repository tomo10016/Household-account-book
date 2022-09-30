<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $fillable = [
        'date', 'nominal', 'bigcategory_id', 'smallcategory_id', 'money', 'shop', 'method_id',
        
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->paginate($limit_count);
    }
}
