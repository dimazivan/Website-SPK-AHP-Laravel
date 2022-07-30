<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\Comparisons;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilform()
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name','Lantai')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name','Kamar')->get();
        // $data_crtsz = SubCriteria::select('nilaik')->where('name','Luas')->get();
        // $data_crtpr = SubCriteria::select('nilaik')->where('name','Harga')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name','Garasi')->get();
        return view('admin/package/rumah/create', [
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            // 'data_crtsz' => $data_crtsz,
            // 'data_crtpr' => $data_crtpr,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function index()
    {
        // mengambil data dari table daftar rumah
        $data_rumah = Alternative::all();

        // mengirim data rumah ke view daftar rumah
        return view('admin/package/rumah/index', [
            'data_rumah' => $data_rumah
        ]);
    }

    public function tampileditrumah($id)
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name','Lantai')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name','Kamar')->get();
        // $data_crtsz = SubCriteria::select('nilaik')->where('name','Luas')->get();
        // $data_crtpr = SubCriteria::select('nilaik')->where('name','Harga')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name','Garasi')->get();
        $data_rumah = DB::table('alternatives')->where('id', $id)->get();
        return view('admin/package/rumah/update', [
            'data_rumah' => $data_rumah,
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            // 'data_crtsz' => $data_crtsz,
            // 'data_crtpr' => $data_crtpr,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function postrumah(Request $request)
    {
        $this->validate($request, [
            'tipe' => 'required',
            'cblantai' => 'required',
            'cbkamar' => 'required',
            'luas' => 'required',
            'harga' => 'required',
            'cbgarasi' => 'required',
            // 'keterangan' => 'required',
            'gambar' => 'required',
            'gambar_denah' => 'required'
        ]);

        // $tujuan_upload = 'data_file';

        // upload file
        // if ($request->hasFile('gambar')) {
        //     $destinationPath = 'data_file';
        //     $files = $request->file('gambar'); // will get all files

        //     foreach ($files as $file) {//this statement will loop through all files.
        //         $file_name = $file->getClientOriginalName(); //Get file original name
        //         $file->move($destinationPath , $file_name); // move files to destination folder
        //     }
        // }
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filedenah = $request->file('gambar_denah');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $nama_filedenah = time() . "_" . $filedenah->getClientOriginalName();
            Alternative::create([
                'tipe' => $request->tipe,
                'lantai' => $request->cblantai,
                'kamar' => $request->cbkamar,
                'luas' => $request->luas,
                'harga' => $request->harga,
                'garasi' => $request->cbgarasi,
                'keterangan' => $request->keterangan,
                'gambar' => $nama_file,
                'gambar_denah' => $nama_filedenah
                // 'gambar' => $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName())
            ]);
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            $filedenah->move($tujuan_upload, $nama_filedenah);

            if($request->luas <= 150){
                $luasc = 1;
            }else if($request->luas >= 200 && $request->luas <= 249){
                $luasc = 2;
            }else if($request->luas >= 250){
                $luasc = 3;
            }else{
                $luasc = 1;
            }

            if($request->harga <= 1000000000){
                $hargac = 1;
            }else if($request->harga >= 1500000000 && $request->harga <= 1999999999){
                $hargac = 2;
            }else if($request->harga >= 2000000000){
                $hargac = 3;
            }else{
                $hargac = 1;
            }

            if($request->cbgarasi == "Tidak ada"){
                $cbgarasic = 1;
            }else if($request->cbgarasi == "Ada"){
                $cbgarasic = 2;
            }else{
                $cbgarasic = 1;
            }


            Comparisons::create([
                'tipe' => $request->tipe,
                'lantai' => $request->cblantai,
                'kamar' => $request->cbkamar,
                'luas' => $luasc,
                'harga' => $hargac,
                'garasi' => $cbgarasic
            ]);

            return redirect('/admin/rumah');
        } else {
            // do nothing
        }
        // dd($request->all());
    }

    public function updaterumah(Request $request)
    {
        // update data 
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filedenah = $request->file('gambar_denah');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $nama_filedenah = time() . "_" . $filedenah->getClientOriginalName();
            DB::table('alternatives')->where('tipe', $request->tipe)->update([
                'lantai' => $request->cblantai,
                'kamar' => $request->cbkamar,
                'luas' => $request->luas,
                'harga' => $request->harga,
                'garasi' => $request->cbgarasi,
                'keterangan' => $request->keterangan,
                'gambar' => $nama_file,
                'gambar_denah' => $nama_filedenah
            ]);
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            $filedenah->move($tujuan_upload, $nama_filedenah);

            if($request->luas <= 150){
                $luasc = 1;
            }else if($request->luas >= 200 && $request->luas <= 249){
                $luasc = 2;
            }else if($request->luas >= 250){
                $luasc = 3;
            }else{
                $luasc = 1;
            }

            if($request->harga <= 1000000000){
                $hargac = 1;
            }else if($request->harga >= 1500000000 && $request->harga <= 1999999999){
                $hargac = 2;
            }else if($request->harga >= 2000000000){
                $hargac = 3;
            }else{
                $hargac = 1;
            }

            if($request->cbgarasi == "Tidak ada"){
                $cbgarasic = 1;
            }else if($request->cbgarasi == "Ada"){
                $cbgarasic = 2;
            }else{
                $cbgarasic = 1;
            }

            DB::table('comparisons')->where('tipe', $request->tipe)->update([
                'lantai' => $request->cblantai,
                'kamar' => $request->cbkamar,
                'luas' => $luasc,
                'harga' => $hargac,
                'garasi' => $cbgarasic
            ]);

            return redirect('/admin/rumah');
        } else {
            // do nothing
        }
        // dd($request->all());       
    }

    public function delrumah($tipe){
        // menghapus data rumah berdasarkan id yang dipilih
        DB::table('comparisons')->where('tipe',$tipe)->delete();
        DB::table('hasils')->where('tipe',$tipe)->delete();
        DB::table('alternatives')->where('tipe',$tipe)->delete();
        return redirect('/admin/rumah');
    }
}
