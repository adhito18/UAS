@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="page-top">
    <header class="text-black" style="height: 1000px">
        <div class="container text-center">
            <h1 class="fw-bolder" style="font-size: 150px">RANGGA ADIWIYASA</h1>
        </div>
    </header>
    <!-- About section-->
    <section class="about">
        <div class="container px-4">
            <div class="text-center" style="margin:40px">
                <h1>Persewaan</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($imagePaths as $index => $imagePath)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ $imagePath }}" class="d-block w-100" alt="Slide {{ $index + 1 }}">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section-->
    <section class="services">
        <div class="container px-4">
            <div class="text-center">
                <h1>Jasa Perform</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section class="contact">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>About us</h2>
                    <p class="lead">Sanggar Rangga Adiwiyasa adalah sanggar seni budaya yang berdiri sejak 2020 di Kelurahan Ngronggo, Kota Kediri,
                            di bawah naungan Karang Taruna Remaja Jaya. Kami memiliki dua divisi utama, yaitu Tari dan Karawitan, masing-masing dengan tiga kelas untuk berbagai tingkat kemampuan.
                            Sanggar ini aktif berkontribusi dalam pelestarian budaya melalui berbagai pagelaran seni,
                            baik di dalam maupun di luar Kota Kediri, seperti Geni Budjari dan Pagelaran Candi Tegowangi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
</body>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection
