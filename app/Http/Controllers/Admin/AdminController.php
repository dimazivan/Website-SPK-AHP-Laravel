<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Criteria;
use App\Models\SubCriteria;
use App\Models\Alternative;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data_user = User::orderBy('created_at', 'desc')->paginate(5);
        $data_rumah = Alternative::orderBy('created_at', 'desc')->paginate(5);
        $jml_user = User::all()->count();
        $jml_kriteria = Criteria::all()->count();
        $jml_alternative = Alternative::all()->count();
        $jml_sub = SubCriteria::all()->count();

        // dd($jml_kriteria);
        return view('admin/package/index', [
            'data_user' => $data_user,
            'data_rumah' => $data_rumah,
            'jml_user' => $jml_user,
            'jml_kriteria' => $jml_kriteria,
            'jml_alternative' => $jml_alternative,
            'jml_sub' => $jml_sub
        ]);
    }

    public function indexrumah(){
        return view('admin/package/rumah/index');
    }

}
