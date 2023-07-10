@extends('layouts.main')
@section('container')
    <div id="kelompok-page">
        <div class="container" id="particles-js">
            <section>
                <div class="card">
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <div class="card-body"></div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('script')
    <script>
        FlexMasonry.init('#flexmasonry');
    </script>
@endsection
