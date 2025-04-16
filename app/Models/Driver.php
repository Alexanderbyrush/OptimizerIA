<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function backupDrivers(){
        return $this->hasMany(BackupDriver::Class);
    }
    


    
}
