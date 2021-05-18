<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    protected $logoutRedirectTo = 'admin/login';

    protected $guard = 'admins';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function initContent()
    {
        return view('admin.login');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return "called";
            $user = auth()->guard('admins')->user();
            return "called";
            
            \Session::put('success','You are Login successfully!!');
            $user = User::with('skill')->get()->toArray();
            return redirect()->route('dashboard');
            
        } else {
            return back()->with('error','your username and password are wrong.');
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->guard('admins')->logout();
        \Session::flush();
        \Session::put('success','You are logout successfully');        
        return redirect(route('admin.login'));
    } 
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
