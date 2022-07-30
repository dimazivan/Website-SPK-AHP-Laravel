@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Perhitungan Matriks</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nilai Perbandingan Matriks</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kriteria 1</th>
                                    <th>Nilai Banding</th>
                                    <th>Nama Kriteria 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Harga</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Harga Sama Penting dengan Fasilitas (Nilai = 1)</option>
                                            <option value="">Harga Lebih Penting daripada Fasilitas (Nilai = 2)</option>
                                            <option value="">Harga Kurang Penting daripada Fasilitas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Fasilitas</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Harga Sama Penting dengan Luas (Nilai = 1)</option>
                                            <option value="">Harga Lebih Penting daripada Luas (Nilai = 2)</option>
                                            <option value="">Harga Kurang Penting daripada Luas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Luas</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Harga Sama Penting dengan Lokasi (Nilai = 1)</option>
                                            <option value="">Harga Lebih Penting daripada Lokasi (Nilai = 2)</option>
                                            <option value="">Harga Kurang Penting daripada Lokasi (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Lokasi</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Harga Sama Penting dengan Keamanan (Nilai = 1)</option>
                                            <option value="">Harga Lebih Penting daripada Keamanan (Nilai = 2)</option>
                                            <option value="">Harga Kurang Penting daripada Keamanan (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Keamanan</td>
                                </tr>
                                <tr>
                                    <td>Fasilitas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Fasilitas Sama Penting dengan Harga (Nilai = 1)</option>
                                            <option value="">Fasilitas Lebih Penting daripada Harga (Nilai = 2)</option>
                                            <option value="">Fasilitas Kurang Penting daripada Harga (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Harga</td>
                                </tr>
                                <tr>
                                    <td>Fasilitas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Fasilitas Sama Penting dengan Luas (Nilai = 1)</option>
                                            <option value="">Fasilitas Lebih Penting daripada Luas (Nilai = 2)</option>
                                            <option value="">Fasilitas Kurang Penting daripada Luas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Luas</td>
                                </tr>
                                <tr>
                                    <td>Fasilitas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Fasilitas Sama Penting dengan Lokasi (Nilai = 1)</option>
                                            <option value="">Fasilitas Lebih Penting daripada Lokasi (Nilai = 2)</option>
                                            <option value="">Fasilitas Kurang Penting daripada Lokasi (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Lokasi</td>
                                </tr>
                                <tr>
                                    <td>Fasilitas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Fasilitas Sama Penting dengan Keamanan (Nilai = 1)</option>
                                            <option value="">Fasilitas Lebih Penting daripada Keamanan (Nilai = 2)</option>
                                            <option value="">Fasilitas Kurang Penting daripada Keamanan (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Keamanan</td>
                                </tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Luas Sama Penting dengan Harga (Nilai = 1)</option>
                                            <option value="">Luas Lebih Penting daripada Harga (Nilai = 2)</option>
                                            <option value="">Luas Kurang Penting daripada Harga (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Harga</td>
                                </tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Luas Sama Penting dengan Fasilitas (Nilai = 1)</option>
                                            <option value="">Luas Lebih Penting daripada Fasilitas (Nilai = 2)</option>
                                            <option value="">Luas Kurang Penting daripada Fasilitas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Fasilitas</td>
                                </tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Luas Sama Penting dengan Lokasi (Nilai = 1)</option>
                                            <option value="">Luas Lebih Penting daripada Lokasi (Nilai = 2)</option>
                                            <option value="">Luas Kurang Penting daripada Lokasi (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Lokasi</td>
                                </tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Luas Sama Penting dengan Keamanan (Nilai = 1)</option>
                                            <option value="">Luas Lebih Penting daripada Keamanan (Nilai = 2)</option>
                                            <option value="">Luas Kurang Penting daripada Keamanan (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Keamanan</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Lokasi Sama Penting dengan Harga (Nilai = 1)</option>
                                            <option value="">Lokasi Lebih Penting daripada Harga (Nilai = 2)</option>
                                            <option value="">Lokasi Kurang Penting daripada Harga (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Harga</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Lokasi Sama Penting dengan Fasilitas (Nilai = 1)</option>
                                            <option value="">Lokasi Lebih Penting daripada Fasilitas (Nilai = 2)</option>
                                            <option value="">Lokasi Kurang Penting daripada Fasilitas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Fasilitas</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Lokasi Sama Penting dengan Luas (Nilai = 1)</option>
                                            <option value="">Lokasi Lebih Penting daripada Luas (Nilai = 2)</option>
                                            <option value="">Lokasi Kurang Penting daripada Luas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Luas</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Lokasi Sama Penting dengan Keamanan (Nilai = 1)</option>
                                            <option value="">Lokasi Lebih Penting daripada Keamanan (Nilai = 2)</option>
                                            <option value="">Lokasi Kurang Penting daripada Keamanan (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Keamanan</td>
                                </tr>
                                <tr>
                                    <td>Keamanan</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Keamanan Sama Penting dengan Harga (Nilai = 1)</option>
                                            <option value="">Keamanan Lebih Penting daripada Harga (Nilai = 2)</option>
                                            <option value="">Keamanan Kurang Penting daripada Harga (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Harga</td>
                                </tr>
                                <tr>
                                    <td>Keamanan</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Keamanan Sama Penting dengan Fasilitas (Nilai = 1)</option>
                                            <option value="">Keamanan Lebih Penting daripada Fasilitas (Nilai = 2)</option>
                                            <option value="">Keamanan Kurang Penting daripada Fasilitas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Fasilitas</td>
                                </tr>
                                <tr>
                                    <td>Keamanan</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Keamanan Sama Penting dengan Luas (Nilai = 1)</option>
                                            <option value="">Keamanan Lebih Penting daripada Luas (Nilai = 2)</option>
                                            <option value="">Keamanan Kurang Penting daripada Luas (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Luas</td>
                                </tr>
                                <tr>
                                    <td>Keamanan</td>
                                    <td>
                                        <select class="form-control">
                                            <option value="">Keamanan Sama Penting dengan Lokasi (Nilai = 1)</option>
                                            <option value="">Keamanan Lebih Penting daripada Lokasi (Nilai = 2)</option>
                                            <option value="">Keamanan Kurang Penting daripada Lokasi (Nilai = 3)</option>
                                        </select>
                                    </td>
                                    <td>Lokasi</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-block">Hitung Ahp</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-warning btn-block">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection