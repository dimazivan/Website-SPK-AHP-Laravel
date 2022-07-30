<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilform()
    {
        return view('admin/package/user/create');
    }

    public function index()
    {
        // mengambil data dari table daftar user
        $data_user = DB::table('users')->get();

        // mengirim data user ke view daftar user
        return view('admin/package/user/index', ['data_user' => $data_user]);
    }

    public function tampiledituser($id)
    {
        $data_user = DB::table('users')->where('id', $id)->get();
        return view('admin/package/user/update', ['data_user' => $data_user]);
    }

    public function postuser(Request $request)
    {
        $this->validate($request, [
            // 'code' => 'required',
            'name' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin/user');
        // dd($request->all());
    }

    public function updateuser(Request $request)
    {
        // update data 
        DB::table('users')->where('email', $request->email)->update([
            'name' => $request->name,
            'role' => $request->role,
            // 'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin/user');
        // dd($request->all());        
    }

    public function deluser($id){
        // menghapus data users berdasarkan id yang dipilih
        DB::table('users')->where('id',$id)->delete();
        return redirect('/admin/user');
    }
}
