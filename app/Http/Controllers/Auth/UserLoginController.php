<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
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
//    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    public function __construct()
    {
//        $this->middleware('guest:admin')->except('logout');
    }

    public function loginAdmin(Request $request)
    {

        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:5'
        ]);
        // Attempt to log the user in
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->route('user.dashboard');
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email'));
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }

}
