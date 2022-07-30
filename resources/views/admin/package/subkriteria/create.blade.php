@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Sub Kriteria</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Input Data Sub Kriteria</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('postsub') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" name="code" placeholder="Code Sub Kriteria" type="text">
                            </div>
                            <br>
                            <p>Nama Kriteria</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                <select class="form-control" name="cbname">
                                    @if($data_crt->count() > 0)
                                    @foreach($data_crt as $DC)
                                    <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                                    @endforeach
                                    @else
                                    <option value="none" disabled>Data kriteria tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                                <input class="form-control" name="nilaik" placeholder="Nilai Kriteria" type="text">
                            </div>
                            <br>
                            <p>Nilai Bobot Kriteria</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                                <select class="form-control" name="cbnilaib">
                                    <option value="1">Rendah (Nilai = 1)</option>
                                    <option value="2">Rata-Rata (Nilai = 2)</option>
                                    <option value="3">Tinggi (Nilai = 3)</option>
                                </select>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembalisub();">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Script -->
                    <script>
                        function kembalisub() {
                            window.location.href = "/admin/sub";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection