<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;

class AdminUser extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admins';
    protected $table = 'admin_users';
}
