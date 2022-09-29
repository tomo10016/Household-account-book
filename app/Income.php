<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'year', 'month', 'day', 'category', 'money',
        
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->paginate($limit_count);
    }
}
