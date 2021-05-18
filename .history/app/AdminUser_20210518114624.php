<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $guard = 'gestionnaireresto';

    use Notifiable;
    protected $table = 'admin_users';
}
