<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //untuk ngarahin ke halaman login
    public function login()
    {
        return view('auth.login');
    }
    //untuk ngarahin ke halaman register
    public function register()
    {
        return view('auth.register');
    }

    //form login user
    public function formLogin(Request $req)
    {
        // dd("test");
        $credentials = $req->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('msg', 'Login berhasil');
        }
        return back()->withErrors([
            'email'         => 'nama tidak boleh kosong',
            'password'      => 'password salah!!',
        ]);
    }
    //form login register
    public function formRegister(Request $req)
    {
        $req->validate(
            [
                'name'      => 'required|string',
                'jabatan'   => 'required|string',
                'tgl_lahir' => 'required|date',
                'no_hp'     => 'required|string',
                'no_wa'     => 'required|string',
                'alamat'    => 'required|string',
                'email'     => 'required|string|unique:users,email',
                'password'  => 'required|string|min:8'
                // 'roles' => ['required', Rule::in(['admin', 'user'])]
            ],
            [
                'name.required'         => 'Nama tidak boleh kosong',
                'jabatan.required'      => 'Jabatan tidak boleh kosong',
                'tgl_lahir.required'    => 'Tanggal Lahir tidak boleh kosong',
                'no_hp.required'        => 'No Handphone tidak boleh kosong',
                'no_wa.required'        => 'No WhatsApp tidak boleh kosong',
                'alamat.required'       => 'Alamat kantor tidak boleh kosong',
                'email.required'        => 'Email tidak boleh kosong',
                'password.required'     => 'Password tidak boleh kosong',
                // 'roles.required' => 'role tidak cocok',
            ],
        );

        $user                       = new User();
        $user->name                 = $req->name;
        $user->jabatan              = $req->jabatan;
        $user->tgl_lahir            = $req->tgl_lahir;
        $user->no_hp                = $req->no_hp;
        $user->no_wa                = $req->no_wa;
        $user->alamat               = $req->alamat;
        $user->email                = $req->email;
        $user->email_verified_at    = now();
        $user->password             = Hash::make($req->password);
        // $user->roles = $req->roles;
        $user->save();
        return redirect('login');
        // if (auth()->attempt(['email' => $user->email, 'password' => $user->password])) {
        //     return redirect()->route('dashboard')->with('msg', 'Register berhasil');
        // }
    }
    public function logout()
    {
        \session()->flush();
        \cache()->flush();
        \auth()->logout();
        return redirect()->route('login')->with('msg', 'Berhasil logout');
    }
}
