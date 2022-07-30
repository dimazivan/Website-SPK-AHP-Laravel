@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Kriteria</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Update Data Kriteria</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_kriteria as $DK)
                        <form action="/admin/kriteria/formedit/updatekriteria/{id}" method="post">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                                <input class="form-control" name="id" placeholder="Id Kriteria" type="text" value="{{ $DK->id }}" readonly>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-inbox"></i></span>
                                <input class="form-control" name="name" placeholder="Nama Kriteria" type="text" value="{{ $DK->name }}">
                            </div>
                            <br>
                            <!-- <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Confirm Password" type="password">
                            </div>
                            <br> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembalikriteria();">Cancel</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <!-- Script -->
                    <script>
                        function kembalikriteria() {
                            window.location.href = "/admin/kriteria";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection