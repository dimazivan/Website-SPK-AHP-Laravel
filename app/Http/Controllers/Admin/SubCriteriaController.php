<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCriteria;
use App\Models\Criteria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubCriteriaController extends Controller
{
    public function index()
    {
        $data_sub = SubCriteria::all();

        return view('admin/package/subkriteria/index', ['data_sub' => $data_sub]);
    }

    public function tampilform()
    {
        $data_crt = Criteria::select('name')->get();
        return view('admin/package/subkriteria/create', [
            'data_crt' => $data_crt
        ]);
    }

    public function tampileditsub($id)
    {
        $data_sub = DB::table('sub_criterias')->where('id', $id)->get();
        $data_crt = Criteria::select('name')->get();

        return view('admin/package/subkriteria/update', [
            'data_crt' => $data_crt,
            'data_sub' => $data_sub
        ]);
    }

    public function postsub(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'cbname' => 'required',
            'nilaik' => 'required',
            'cbnilaib' => 'required'
        ]);

        SubCriteria::create([
            'code' => $request->code,
            'name' => $request->cbname,
            'nilaik' => $request->nilaik,
            'nilaib' => $request->cbnilaib
        ]);
        return redirect('/admin/sub');
        // dd($request->all());
    }

    public function updatesub(Request $request)
    {
        // update data 
        DB::table('sub_criterias')->where('code', $request->code)->update([
            'name' => $request->cbname,
            'nilaik' => $request->nilaik,
            'nilaib' => $request->cbnilaib
        ]);
        return redirect('/admin/sub');
        // dd($request->all());       
    }

    public function delsub($id){
        // menghapus data sub berdasarkan id yang dipilih
        DB::table('sub_criterias')->where('id',$id)->delete();
        return redirect('/admin/sub');
    }
}
