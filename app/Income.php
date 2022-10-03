<?php

namespace App;

use App\Category_income;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'date', 'category_id', 'money',
        
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Category_income');
    }
    
   public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('date', 'ASC')->paginate($limit_count);
    }
}
