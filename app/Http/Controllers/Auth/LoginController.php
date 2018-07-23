<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('guest')->except('doLogout');
    }

    public function index(Request $request) {
        return view('login');
    }

    /**
     * Performs a login
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
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

    /**
     * Performs a log out
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function doLogout(Request $request) {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->flash("message.level", "success");
            $request->session()->flash("message.content", "You have successfully logged out!");
        }
        else {
            $request->session()->flash("message.level", "danger");
            $request->session()->flash("message.content", "You are not logged in.");
        }

        return redirect(route("auth.login.view"));
    }
}
