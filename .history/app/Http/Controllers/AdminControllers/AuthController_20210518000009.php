<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function initContent()
    {
        return view('admin/login');

    }
    public function initRegister()
 {
              return view('admin/register');
 }
}
