<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\AdminUser as Authenticatable;

class AdminUser extends App\Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $table = 'admin_users';
}
