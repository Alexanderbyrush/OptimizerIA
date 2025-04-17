<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function configuration(){
        return $this->hasOne(Configuration::Class);
    }

    public function performanceHistorys(){
        return $this->hasMany(PerformanceHistory::Class);
    }

    public function notifications(){
        return $this->hasMany(Notification::Class);
    }

    public function maintenances(){
        return $this->hasMany(Maintenance::Class);
    }

    public function drivers(){
        return $this->hasMany(Driver::Class);
    }

    public function backupDrivers(){
        return $this->hasMany(BackupDriver::Class);
    }

    public function optimizationReports(){
        return $this->hasMany(OptimizationReport::Class);
    }






}
