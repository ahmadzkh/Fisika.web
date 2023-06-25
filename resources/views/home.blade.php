@extends('layouts.main')
@section('container')
    <div id="home-page">
        <div class="container-fluid">
            <div class="row wrapper d-flex justify-content-around">
                <div class="col-2">
                    <nav id="sidebar" class="sidebar position-fixed">
                        <!-- <div class="custom-menu">
                                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                                    </button>
                                </div> -->
                        <div class="pt-5">
                            <h1><a href="index.html" class="logo">Fisika Kimia 2A <span>Medan Magnet</span></a></h1>

                            <ul class="list-unstyled components mb-5">
                                <li class="active">
                                    <a href="#judul1" style="font-size: 16px;"><i class="fa fa-hourglass-half mr-3"></i>
                                        Definisi dan Sejarah</a>
                                </li>
                                <li>
                                    <a href="#judul2" style="font-size: 16px;"><i class="fa fa-compass mr-3"></i> Sifat,
                                        Jenis dan Fungsi</a>
                                </li>
                                <li>
                                    <a href="#judul3" style="font-size: 16px;"><i
                                            class="fa-solid fa-square-root-variable mr-3"></i> Pengukuran dan Rumus</a>
                                </li>
                                <li>
                                    <a href="#judul4" style="font-size: 16px;"><i class="fa-solid fa-magnet mr-3"></i> Gaya
                                        Lorentz</a>
                                </li>
                                <li>
                                    <a href="#judul5" style="font-size: 16px;"><i class="fa-solid fa-microscope mr-3"></i>
                                        Penerapan</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-9">
                    <!-- Page Content  -->
                    <section id="judul1">
                        <h1 class="mb-4">Definisi dan Sejarah</h1>
                        <div class="container-fluid py-5">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <img src="/assets/img/defmagnet1.png" alt="medan_magnet" class="img-fluid"
                                        draggable="false">
                                </div>
                                <div class="col">
                                    <p style="font-size: 18px;" align="justify">Medan magnet adalah suatu medan yang
                                        dibentuk dengan menggerakkan muatan listrik (arus listrik) yang menyebabkan
                                        munculnya gaya di muatan listrik yang bergerak lainnya. Medan ini adalah wilayah di
                                        sekitar magnet atau arus listrik yang bergerak di mana gaya magnetisme dapat
                                        terdeteksi. Medan magnet direpresentasikan oleh garis-garis medan magnetik yang
                                        menunjukkan arah gaya yang dialami oleh kutub utara jika ditempatkan di dalam medan.
                                        Kekuatan medan magnet ditentukan oleh besaran dan arah garis-garis medan magnetik.
                                    </p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <p style="font-size: 18px;" align="justify">
                                        Konsep medan magnet telah diketahui oleh masyarakat kuno. Namun, riset mengenai
                                        medan magnet baru dimulai oleh Petrus Peregrinus de Maricourt pada tahun 1269.
                                        Kemudian tiga abad setelah Petrus Peregrinus mengemukakan teorinya mengenai medan
                                        magnet. William Gilbert melakukan replikasi penelitiannya dengan menerbitkan De
                                        Magnete pada tahun 1600. Karyanya ini akhirnya membantu membangun magnetism sebagai
                                        sebuah ilmu (masuk ke dalam science). Lalu pada tahun 1831, Michael Faraday
                                        menemukan adanya induksi elektromagnetik. Induksi elektromagnetik menjelaskan bahwa
                                        medan listrik yang melingkar dapat ditimbulkan dari medan magnet yang berubah.
                                        Penemuan tersebut masih digunakan sampai sekarang dengan nama hukum induksi Faraday.

                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="/assets/img/defmagnet2.jpg" alt="medan_magnet" class=""
                                        draggable="false">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="judul2">
                        <h1 class="mb-4">Sifat, Jenis dan Fungsi</h1>
                        <p style="font-size: 18px;" align="justify">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </section>

                    <section id="judul3">
                        <h1 class="mb-4">Pengukuran dan Rumus</h1>
                        <p style="font-size: 18px;" align="justify">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </section>

                    <section id="judul4">
                        <h1 class="mb-4">Gaya Lorentz</h1>
                        <p style="font-size: 18px;" align="justify">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </section>

                    <section id="judul5">
                        <h1 class="mb-4">Penerapan</h1>
                        <p style="font-size: 18px;" align="justify">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
