<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Zttp\Zttp;
use Illuminate\Validation\ValidationException;
use Session;

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
    protected $redirectTo = '/dashboard/home';
    
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');   
    }
    
    
    
     public function showLoginForm()
    {
       
        return view('admin.auth.login');
    }
    
    
    
    public function username()
    {
        $loginInput = request()->input('username');
       
        $loginType = 'email';
  
        if(filter_var($loginInput, FILTER_VALIDATE_EMAIL))
        {       
           request()->merge(['email' => $loginInput]);
            
            //dd(request()->all());
            return 'email';
        }
        
        else
        {
           request()->merge(['phone'=>$loginInput]);
           //dd(request());
            return 'phone';
        }
        
    }
    
}
