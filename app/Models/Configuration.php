<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::Class);
    }
}
