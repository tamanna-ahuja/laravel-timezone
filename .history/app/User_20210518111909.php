<?php

namespace App;

use Carbon\Carbon;
use DateTime;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','timezone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function skill()
    {
        return $this->hasMany(Skill::class);

    }

    public function getAttributeCreatedAt($data){
        $date = new DateTime();
        $timeZone = $date->getTimezone();
        
        Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d'), 'UTC')
    ->setTimezone($timeZone->getName())
    }
}
