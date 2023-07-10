@extends('layouts.main')
@section('container')
    <div id="kelompok-page">
        <div class="container" id="particles-js">

        </div>
    </div>
@endsection
@section('script')
    <script>
        FlexMasonry.init('#flexmasonry');
    </script>
@endsection
