<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->paginate($limit_count);
    }
}
