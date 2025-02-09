<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;

class AuthController extends Controller
{
    public function index(): View
    {
        $agent = new Agent();

        if ($agent->isMobile()) {
            return view('index');
        } else {
            return view('web.auth.login');
        }
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function processLogin(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data["no_hp"] = $request->post("username");
        $data["password"] = $request->post("password");

        $hit = $this->POSTLOGIN("api/auth/login", $data);
        if (isset($hit) && $hit->status) {
            Session::put("nama", $hit->data->nama);
            Session::put("role", $hit->data->role);
            Session::put("token", $hit->data->access_token);
            Session::put('user_id', $hit->data->user_id);

            // Get Toko
            if ($hit->data->role == "owner") {
                $toko = $this->GET('api/outlet/user', []);
                Session::put('toko', $toko->data[0]->outlet);
                if ($hit->data->status != "active") {
                    return redirect()->to(route('verifikasiOtp'));
                }
            } else {
                $toko = $this->GET('api/toko/pegawai/'.$hit->data->id, []);
                Session::put('toko', $toko->data->toko);
            }

            return redirect()->action([DashboardController::class, 'index']);
        } else {
            Session::flash("error", "Login gagal, email atau password salah!");
            return back();
        }
    }

    public function processRegister(Request $request): \Illuminate\Http\RedirectResponse
    {
        $hit = $this->POSTLOGIN('api/auth/register', [
            'nama'          => $request->post("nama"),
            'email'         => $request->post("email"),
            'no_hp'         => $request->post("no_hp"),
            'nama_outlet'   => $request->post("outlet"),
            'no_hp_outlet'  => $request->post("no_hp"),
            'password'      => $request->post("password"),
        ]);

        if (isset($hit) && $hit->status) {
            Session::flash('success', 'Register Berhasil');
            return redirect()->action([AuthController::class, 'login']);
        } else {
            Session::flash('error', 'Register Gagal');
            return back();
        }
    }

    public function lupaKataSandi(): View
    {
        return view('auth.forget_password');
    }

    public function lupaKataSandiProses(Request $request)
    {

    }

    public function verifikasiOtp(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('auth.otp');
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect()->action([AuthController::class, 'login']);
    }
}
