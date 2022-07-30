@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Kesimpulan</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="margin-top: 30px;"><strong>Laporan Hasil Rekomendasi Rumah</strong></h3>
                    </div>
                    @foreach($data_rumah as $DR)
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Tipe Rumah : {{ $DR->tipe }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="text-center">
                                        <img src="{{ url('/data_file/'.$DR->gambar) }}" alt="{{ $DR->gambar }}" width="500px" height="500px">
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                        <p>Berikut merupakan hasil rekomendasi rumah yang dihitung berdasarkan nilai bobot kriteria yang anda berikan</p>
                        <p>Hasil nilai ahp yang telah dihitung adalah sebesar <strong>{{ $DR->ahp }}</strong></p>
                        <p>Untuk melihat detail rumah lebih lanjut Anda menekan link sebagai berikut : <a href="/detail/{{ $DR->tipe }}">{{ $DR->tipe }}</a></p>
                        <p style="margin-top: 500px;">
                            <div class="copyright">
                                &copy; Copyright <strong><span>SPK Perum</span></strong>. All Rights Reserved
                            </div>
                        </p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
</div>
@endsection