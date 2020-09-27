<?php
declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthController
 * @package App\Http\Controllers\Auth
 */
class AuthController extends CustomController
{
    //

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageLogin()
    {
        return view('login.login');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];
        if ($this->isAuth($credentials)) {
            $redirect = '/admin';

            return redirect($redirect);
        }

        return redirect()->back()->withInput()->with('failed', 'Periksa Kembali Username dan Password Anda');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register()
    {
        if ($this->postField('password') !== $this->postField('password_confirmation')) {
            return redirect()->back()->with(['fail' => 'Password Not Match']);
            dd('fail');
        }
        $roles = $this->postField('roles');
        $data  = [
            'username' => $this->postField('username'),
            'email'    => $this->postField('email'),
            'password' => Hash::make($this->postField('password')),
        ];

        $redirect = '/admin';
        $user     = $this->insert(User::class, $data);

        Auth::loginUsingId($user->id);

        return redirect($redirect);
    }
}
