<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index() {
        if(Auth::check()) {
            return redirect()->action('HomeController@index');
        } else {
            return view('auth.login');
        }
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
            return redirect()->action('Admin\HomeController@index');
        } else {
            return redirect()->action('Auth\LoginController@index')
            ->withInput($request->except('password'))
            ->with('error', 'Your email and/or password is invalid.');
        }
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect()->action('Admin\HomeController@index');
    }
}
