@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Rumah</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Input Data Rumah</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('postrumah') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Tipe Rumah" name="tipe" type="text">
                            </div>
                            <br>
                            <p>Jumlah Lantai</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="cblantai">
                                    @if($data_crtlt->count() > 0)
                                    @foreach($data_crtlt as $DCLT)
                                    <option value="{{ $DCLT->nilaik }}">{{ $DCLT->nilaik }}</option>
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <p>Jumlah Kamar</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bed"></i></span>
                                <select class="form-control" name="cbkamar">
                                    @if($data_crtkm->count() > 0)
                                    @foreach($data_crtkm as $DCKM)
                                    <option value="{{ $DCKM->nilaik }}">{{ $DCKM->nilaik }}</option>
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input class="form-control" placeholder="Luas Tanah" name="luas" type="number">
                                <span class="input-group-addon">M<sup>2</sup></span>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                                <input class="form-control" placeholder="Harga Rumah" name="harga" type="Number">
                            </div>
                            <br>
                            <p>Garasi</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                <select class="form-control" name="cbgarasi">
                                    @if($data_crtgr->count() > 0)
                                    @foreach($data_crtgr as $DCGR)
                                    <option value="{{ $DCGR->nilaik }}">{{ $DCGR->nilaik }}</option>
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <!-- <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                <input class="form-control" placeholder="Garasi" name="garasi" type="text">
                            </div> -->
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Keterangan" name="keterangan" type="text">
                            </div>
                            <br>
                            <div class="">
                                <p>Gambar Rumah</p>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <br>
                            <div class="">
                                <p>Gambar Denah Rumah</p>
                                <input type="file" class="form-control" id="gambar_denah" name="gambar_denah">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembalirumah();">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
                        function kembalirumah() {
                            window.location.href = "/admin/rumah";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection