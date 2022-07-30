@extends('customer.layouts.applogin')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Detail Rumah</h2>
            <ol>
                <li><a href="/home">Home</a></li>
                <li>Detail Rumah</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    @if($data_rumah->count() > 0)
    @foreach($data_rumah as $DR)
    <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up">

            <div class="owl-carousel portfolio-details-carousel">
                <img src="{{ url('/data_file/'.$DR->gambar) }}" class="img-fluid" alt="{{ $DR->gambar }}">
                <img src="{{ url('/data_file/'.$DR->gambar_denah) }}" class="img-fluid" alt="{{ $DR->gambar_denah }}">
            </div>

            <div class="portfolio-info">
                <h3>Rumah Tipe : {{ $DR->tipe }}</h3>
                <ul>
                    <li><strong>Harga</strong>: {{ $DR->tipe }}</li>
                    <li><strong>Luas Tanah</strong>: {{ $DR->luas }}</li>
                    <li><strong>Jumlah Kamar</strong>: {{ $DR->kamar }}</li>
                    <li><strong>Jumlah Lantai</strong>: {{ $DR->lantai }}</li>
                    <li><strong>Garasi</strong>: {{ $DR->garasi }}</li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <h2>Lain - Lain</h2>
            <p>
                {{ $DR->keterangan }}
            </p>
        </div>

    </div>
    @endforeach
    @else
    <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up">

            <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            </div>

            <div class="portfolio-info">
                <h3>Rumah Tipe : </h3>
                <ul>
                    <li><strong>Harga</strong>: </li>
                    <li><strong>Luas Tanah</strong>: </li>
                    <li><strong>Jumlah Kamar</strong>: </li>
                    <li><strong>Jumlah Lantai</strong>: </li>
                    <li><strong>Garasi</strong>: </li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <h2>Lain - Lain</h2>
            <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
        </div>

    </div>
    @endif
</section><!-- End Portfolio Details Section -->
@endsection