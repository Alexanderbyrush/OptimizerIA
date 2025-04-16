<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptimizationReport extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::Class);
    }
}
