@extends('layouts.main')
@section('container')
<div id="kelompok-page">
    <div class="container">
        <section class="grid anggota" id="particles-js">
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/zaky.jpg") }}" class="profile" alt="zaky">
                </div>
                <h5 class="card-title text-center mb-4">Ahmad Zaky Humami</h5>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/ikhwan.jpg") }}" class="profile" alt="ikhwan">
                </div>
                <h5 class="card-title text-center mb-4">Ikhwan Maulana</h5>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/mfatur.jpg") }}" class="profile" alt="matur">
                </div>
                <h5 class="card-title text-center mb-4">Muhammad Fathurrahman</h5>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                </div>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/raihan.jpg") }}" class="profile" alt="raihan">
                </div>
                <h5 class="card-title text-center mb-4">Muhammad Raihan Zhafran</h5>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                </div>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/rizky.jpg") }}" class="profile" alt="rizky">
                </div>
                <h5 class="card-title text-center mb-4">Pratama Rizky Aditya</h5>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/papang.jpg") }}" class="profile" alt="papang">
                </div>
                <h5 class="card-title text-center mb-4">Rifqi Ramadhani Hidayat</h5>
            </div>
            <div class="card glass">
                <div class="card-body mx-auto">
                    <img src="{{ asset ("assets/img/yoga.jpg") }}" class="profile" alt="yoga">
                </div>
                <h5 class="card-title text-center mb-4">Yoga Ardiansyah</h5>
            </div>
        </section>
    </div>
</div>
@include('partials.footer')
@endsection
@section('script')
    <script>
        FlexMasonry.init('.grid', {
        responsive: false,
        numCols: 3
        });
    </script>
@endsection
