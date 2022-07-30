<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Criteria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function tampilform(){
        return view('admin/package/kriteria/create');
    }

    public function index(){
        $data_kriteria = Criteria::all();

        return view('admin/package/kriteria/index',['data_kriteria' => $data_kriteria]);
    }

    public function tampileditkriteria($id)
    {
        $data_kriteria = DB::table('criterias')->where('id', $id)->get();
        return view('admin/package/kriteria/update', ['data_kriteria' => $data_kriteria]);
    }

    public function postkriteria(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required'
        ]);

        Criteria::create([
            'code' => $request->code,
            'name' => $request->name
        ]);
        return redirect('/admin/kriteria');
        // dd($request->all());
    }

    public function updatekriteria(Request $request)
    {
        // update data 
        DB::table('criterias')->where('id', $request->id)->update([
            'name' => $request->name
        ]);
        return redirect('/admin/kriteria');
        // dd($request->all());        
    }
    
}
