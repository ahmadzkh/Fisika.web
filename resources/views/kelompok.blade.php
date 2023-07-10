@extends('layouts.main')
@section('container')
    <div id="kelompok-page">
        <div class="container">
            <div class="row wrapper mb-3">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Anggota</h2>
                    </div>
                </div>
            </div>
            <div class="row g-0" data-masonry='{"percentPosition": true }' id="flexmasonry">
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>Ahmad Zaky Humami</h5>
                            <p>50422138</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>&nbsp&nbsp&nbspIkhwan&nbspMaulana&nbsp&nbsp&nbsp</h5>
                            <p>50422698</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>Muhammad Fathurrahman</h5>
                            <p>51422049</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>Muhammad Raihan Zhafran</h5>
                            <p>51422127</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0" data-masonry='{"percentPosition": true }' id="flexmasonry">
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>Pratama Rizky Aditya</h5>
                            <p>51422299</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>Rifqi Ramadhani Hidayat</h5>
                            <p>51422445</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 me-3">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/download.jpeg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center">
                            <h5>&nbsp&nbsp&nbspYoga&nbspArdiansyah&nbsp&nbsp&nbsp&nbsp</h5>
                            <p>51422643</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        FlexMasonry.init('#flexmasonry');
    </script>
@endsection
