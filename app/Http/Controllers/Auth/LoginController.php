<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(Request $request) {
        return view('login');
    }

    public function doLogin(Request $request) {

        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $errors = new MessageBag();

        $data = $request->only("name", "password");
        if (Auth::attempt($data)) {
            return redirect()->intended($this->redirectTo);
        }
        else {
            $errors->add("Bad Credentials", "Incorrect Username or Password");
            return view('login')->withErrors($errors);
        }

    }
}
