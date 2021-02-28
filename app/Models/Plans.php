<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;
    protected $table = 'plans';

    public function percentage(){
        return $this->hasOne('App\Models\Percentage');
    }

}
