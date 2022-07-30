@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master User</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Input Data User</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('postuser') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" name="name" placeholder="Nama Lengkap" type="text">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" name="email" placeholder="Email" type="text">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                            <br>
                            <!-- <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Confirm Password" type="password">
                            </div>
                            <br> -->
                            <div class="">
                                <label class="fancy-radio">
                                    <input name="role" value="Admin" type="radio">
                                    <span><i></i>Admin</span>
                                </label>
                                <label class="fancy-radio">
                                    <input name="role" value="Customer" type="radio">
                                    <span><i></i>Customer</span>
                                </label>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembaliuser();">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Script -->
                    <script>
                        function kembaliuser() {
                            window.location.href = "/admin/user";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection