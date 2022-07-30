<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin/package/page-login');
    }

    public function register()
    {
        return view('admin/package/page-register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'role' => 'Customer',
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login');
        // dd($request->all());
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->role == 'Admin') {
                return redirect('/admin');
            } elseif (auth()->user()->role == 'Customer') {
                return redirect('/home');
            } else {
                return redirect('login');
            }
        } else {
            echo '<script language="javascript">';
            echo 'alert("Data User tidak ditemukan")';
            echo '</script>';
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        DB::table('hasils')->delete();
        return redirect('login');
    }
}
