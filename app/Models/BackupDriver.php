<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BackupDriver extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function driver(){
        return $this->belongsTo(Driver::Class);
    }
}
