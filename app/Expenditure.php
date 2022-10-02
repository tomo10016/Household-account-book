<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $fillable = [
        'date', 'nominal', 'bigcategory_id', 'smallcategory_id', 'money', 'shop', 'method_id',
        
    ];
    
    public function bigcategory()
    {
        return $this->belongsTo('App\BigCategory_expenditure');
    }
    
    public function smallcategory()
    {
        return $this->belongsTo('App\SmallCategory_expenditure');  
    }
    
    public function method()
    {
        return $this->belongsTo('App\PaymentMethod');  
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->paginate($limit_count);
    }
}
