<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\SubCriteria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_rumah = Alternative::all();
        $data_crt = SubCriteria::select('name')->distinct()->get();
        return view('customer/package/index', [
            'data_rumah' => $data_rumah,
            'data_crt' => $data_crt
        ]);
    }

    public function indexlogin()
    {
        $data_rumah = Alternative::all();
        $data_crt = SubCriteria::select('name')->distinct()->get();
        return view('customer/package/indexlogin', [
            'data_rumah' => $data_rumah,
            'data_crt' => $data_crt
        ]);
    }

    public function tampilmodal()
    {
        return view('customer/package/indexlogin');
    }

    public function test()
    {
        return view('customer/package/portfolio-details');
    }

    public function ubahpassword(Request $request)
    {
        // update data 
        DB::table('users')->where('name', auth()->user()->name)->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect('/home');
        // dd($request->all());   
    }
}
