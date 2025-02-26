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
        $this->middleware('auth')->only('logout');
    }


    /**
     * تحديد وجهة المستخدم بعد تسجيل الدخول.
     */
    protected function redirectTo()
    {
        if (Auth::user()->role === 'admin') {
            return '/admin';
        } elseif (Auth::user()->role === 'employee') {
            return '/employee';
        }

        return '/';
    }


     /**
     * تعديل عملية تسجيل الدخول لإضافة التحقق من دور المستخدم.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // إعادة توجيه بناءً على دور المستخدم
            if ($user->role === 'admin') {
                return redirect()->route('admin.index');
            } elseif ($user->role === 'employee') {
                return redirect()->route('employee.dashboard');
            }
        }

        return back()->withErrors(['email' => 'بيانات تسجيل الدخول غير صحيحة']);
    }
}
