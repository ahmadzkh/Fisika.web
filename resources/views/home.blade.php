@extends('layouts.main')
@section('container')
    <div id="home-page">
        <div class="title_project">
            <div class="container">
                <div class="row">
                    <div class="col" id="particles-js">
                        <div class="row">
                            <div class="col-5 offset-md-2 mx-auto">
                                {{-- col-d-5 --}}
                                <figure class="atom_lottie"></figure>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 offset-md-2 my-auto title_fisika" style="display: none">
                                <p class="typing_title_matkul fs-1 fw-bold m-auto">Fisika dan Kimia Dasar 2A</p>
                                <p class="typing_title m-auto">Medan Magnet</p>
                                <p class="typing_title_kelompok fs-6 m-auto">Present by Kelompok 8</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <menu class="menu shadow position-fixed bottom-0 start-50 translate-middle-x">
            <button class="menu__item active" onClick="location.href='#judul1'">
                <div class="menu__icon">
                    <i class="fa fa-hourglass-half mr-3 self_icon"></i>
                </div>
                <strong class="menu__text active">Definisi dan Sejarah</strong>
            </button>
            <button class="menu__item" onClick="location.href='#judul2'">
                <div class="menu__icon">
                    <i class="fa fa-compass mr-3 self_icon"></i>
                </div>
                <strong class="menu__text">Sifat, Jenis dan Fungsi</strong>
            </button>

            <button class="menu__item" onClick="location.href='#judul3'">
                <div class="menu__icon">
                    <i class="fa-solid fa-square-root-variable mr-3 self_icon"></i>
                </div>
                <strong class="menu__text">Pengukuran dan Rumus</strong>
            </button>

            <button class="menu__item" onClick="location.href='#judul4'">
                <div class="menu__icon">
                    <i class="fa-solid fa-magnet mr-3 self_icon"></i>
                </div>
                <strong class="menu__text">Gaya Lorentz</strong>
            </button>

            <button class="menu__item" onClick="location.href='#judul5'">
                <div class="menu__icon">
                    <i class="fa-solid fa-microscope mr-3 self_icon"></i>
                </div>
                <strong class="menu__text">Penerapan</strong>
            </button>
        </menu>

        <!-- Page Content  -->
        <section id="judul1">
            <div class="container">
                <h1 class="mb-5" data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                    Definisi dan Sejarah</h1>
                <div class="row mb-5 d-flex justify-content-around">
                    <div class="col-md-4">
                        <img src="{{ asset('/assets/img/defmagnet1.png') }}" alt="medan_magnet" class="img-fluid"
                            draggable="false" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">
                    </div>
                    <div class="col-md-7">
                        <p style="font-size: 20px;" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">Medan magnet adalah suatu
                            medan yang
                            dibentuk dengan menggerakkan muatan listrik (arus listrik) yang menyebabkan
                            munculnya gaya di muatan listrik yang bergerak lainnya. Medan ini adalah wilayah di
                            sekitar magnet atau arus listrik yang bergerak di mana gaya magnetisme dapat
                            terdeteksi. Medan magnet direpresentasikan oleh garis-garis medan magnetik yang
                            menunjukkan arah gaya yang dialami oleh kutub utara jika ditempatkan di dalam medan.
                            Kekuatan medan magnet ditentukan oleh besaran dan arah garis-garis medan magnetik.
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-md-8">
                        <p style="font-size: 20px;" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
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
                    <div class="col-md-3">
                        <img src="/assets/img/defmagnet2.jpg" alt="faraday" class="img-fluid" draggable="false"
                            data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                    </div>
                </div>
            </div>
        </section>

        <section id="judul2">
            <div class="container">
                <h1 class="mb-5" data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                    Sifat, Jenis Fungsi</h1>
                <div class="row mb-5 d-flex justify-content-around">
                    <div class="col-lg-2 col-sm-12">
                        <p style="font-size: 20px" class="text-center" data-aos="fade-down"
                            data-aos-anchor-placement="top-center">Fungsi Magnet</p>
                        <img src="{{ asset('/assets/img/mikros.png') }}" alt="mikros" class="img-fluid" draggable="false"
                            data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <ul style="font-size: 20px">
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                                Memproduksi listrik</li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="300">
                                Membuat benda tertentu
                                menjadi magnetik</li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="600">
                                Menggerakkan benda yang magnetik</li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="900">
                                Untuk menentukan arah</li>
                        </ul>
                    </div>
                </div>
                <div class="row mb-5 d-flex justify-content-around">
                    <div class="col-md-2 my-auto">
                        <p style="font-size: 20px;" data-aos="fade-right" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">Sifat Magnet :</p>
                    </div>
                    <div class="col-md-10 text-justify" style="min-height: 100px">
                        <div class="row">
                            <div class="col-md-8" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                                data-aos-duration="1500">
                                {{-- ini kalo bisa dibikin carousel dah --}}
                                <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Menarik benda-benda yang bersifat feromagnetik: Medan magnet memiliki
                                                kemampuan
                                                untuk menarik benda-benda yang memiliki sifat feromagnetik, seperti besi,
                                                kobalt, dan nikel.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Memiliki kutub utara dan kutub selatan: Seperti pada magnet, medan magnet
                                                juga
                                                memiliki kutub utara dan kutub selatan. Medan magnet selalu berjalan dari
                                                kutub
                                                utara ke kutub selatan, baik itu pada magnet alami seperti bumi, maupun pada
                                                magnet buatan manusia.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Berinteraksi dengan medan listrik: Medan magnet dan medan listrik berkaitan
                                                satu
                                                sama lain dalam persamaan elektromagnetisme dan saling mempengaruhi satu
                                                sama
                                                lain.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Dipengaruhi oleh arus listrik: Medan magnet diproduksi oleh arus listrik
                                                yang
                                                mengalir pada kawat konduktor, dan arah medan magnet tergantung pada arah
                                                aliran
                                                arus listrik.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Medan magnet dapat diamati dan diukur: Medan magnet dapat diamati dan diukur
                                                dengan menggunakan instrumen seperti kompas atau gaussmeter, yang dapat
                                                menunjukkan kekuatan dan arah medan magnet.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Medan magnet dapat melemahkan atau menguat: Medan magnet dapat melemahkan
                                                atau
                                                menguat tergantung pada jarak dan arah relatif antara medan magnet dan objek
                                                yang berinteraksi dengannya.
                                            </p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="d-block w-100" style="font-size: 20px">
                                                Medan magnet dapat dipolarisasi: Medan magnet dapat dipolarisasi oleh medan
                                                magnet lainnya yang lebih kuat atau oleh medan listrik.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-md-2 my-auto">
                        <p style="font-size: 20px" data-aos="fade-right" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">Jenis Magnet</p>
                    </div>
                    <div class="col-md-8">
                        <ul style="font-size: 20px">
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                                Medan Magnet Statis
                            </li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="200">
                                Medan Magnet Alternating
                            </li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="400">
                                Medan Magnet Konstan
                            </li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="600">
                                Medan Magnet Kuat
                            </li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="800">
                                Medan Magnet Lemah
                            </li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="1000">
                                Medan Magnet Penginduksi
                            </li>
                            <li data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1500"
                                data-aos-delay="1200">
                                Medan Magnet Pesawat Terbang
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="judul3">
            <div class="container">
                <h1 class="mb-5" data-aos="fade-right" data-aos-anchor-placement="top-center"
                    data-aos-duration="1500">Pengukuran dan Rumus</h1>
                <div class="row d-flex justify-content-around">
                    <h4 class="text-center mb-3" data-aos="fade-down" data-aos-anchor-placement="top-center"
                        data-aos-duration="1500">Pengukuran Medan Magnet</h4>
                    <div class="col-lg-12 mb-lg-3">
                        <img src="{{ asset('/assets/img/alatukur.png') }}" alt="pengukuran"
                            class="img-fluid mx-auto d-block w-75" draggable="false" data-aos="zoom-in"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                    </div>
                    <div class="col-lg-12 mb-lg-3">
                        <p style="font-size: 18px;" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">Pengukuran medan magnet
                            dilakukan dengan
                            menggunakan alat yang disebut Gaussmeter atau Magnetometer. Gauss meter atau magnetometer
                            adalah alat yang digunakan untuk melakukan pengukuran medan magnet yang ada pada suatu
                            benda. selain digunakan untuk mengukur besaran arus pada magnet, alat ini juga dapat
                            digunakan untuk menentukan arah serta kekuatan dari magnet tersebut. alat ini juga bersifat
                            portable, yang mana alat ini dapat dibawa kemanapun, dan kapanpun. Gaussmeter ini
                            menggunakan sensor magnetik untuk mengukur medan magnet dalam unit Gauss (G) atau Tesla (T).
                            Ada beberapa jenis Gaussmeter, antara lain Hall Effect Gaussmeter, Fluxmeter, dan Proton
                            Precession Magnetometer.

                        </p>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-around">
                    <h4 class="text-center mb-3" data-aos="fade-down" data-aos-anchor-placement="top-center"
                        data-aos-duration="1500">Rumus Medan Magnet pada titik tertentu akibat arus arus listrik yang
                        mengalir listrik</h4>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <img src="{{ asset('/assets/img/rumus1.png') }}" alt="rumus1" class="img-fluid"
                            draggable="false" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <p style="font-size: 18px;" align="justify" data-aos="fade-right"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Rumus yang digunakan untuk menghitung medan magnet adalah rumus B = μ₀ * I / (2 * π * r).
                            Rumus ini digunakan untuk menghitung medan magnet pada titik tertentu akibat arus listrik
                            yang mengalir pada kawat. B merupakan medan magnet yang dihasilkan, μ₀ adalah pada kawat,
                            dan r adalah jarak dari titik yang diukur ke arah arus listrik.
                        </p>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-around">
                    <h4 class="text-center mb-3" data-aos="fade-down" data-aos-anchor-placement="top-center"
                        data-aos-duration="1500">Rumus Medan Magnet pada titik tertentu akibat kutub magnet</h4>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <img src="{{ asset('/assets/img/rumus2.png') }}" alt="rumus2" class="img-fluid"
                            draggable="false" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <p style="font-size: 18px;" align="justify" data-aos="fade-right"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Rumus medan magnet yang lain adalah B = μ₀ * m / (4 * π * r^3). Rumus ini digunakan untuk
                            menghitung medan magnet pada titik tertentu akibat kutub magnet. B merupakan medan magnet
                            yang dihasilkan, μ₀ adalah permeabilitas vakum, m adalah momen magnetik kutub magnet, dan r
                            adalah jarak dari titik yang diukur ke kutub magnet.
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-around">
                    <h4 class="text-center mb-3" data-aos="fade-down" data-aos-anchor-placement="top-center"
                        data-aos-duration="1500">Rumus Medan Magnet dalam Toroid Rumus</h4>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <img src="{{ asset('/assets/img/rumus3.png') }}" alt="rumus3" class="img-fluid"
                            draggable="false" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <p style="font-size: 18px;" align="justify" data-aos="fade-right"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Selain itu, rumus medan magnet juga dapat diterapkan pada suatu toroid. Rumusnya adalah B =
                            μ₀ * n * I, dimana B adalah medan magnet pada toroid, μ₀ adalah permeabilitas vakum, n
                            adalah jumlah lilitan pada toroid, dan I adalah besarnya arus listrik yang mengalir pada
                            toroid.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="judul4">
            <div class="container">
                <h1 class="mb-5" data-aos="fade-right" data-aos-anchor-placement="top-center"
                    data-aos-duration="1500">Gaya Lorentz</h1>
                <div class="row d-flex justify-content-around">
                    <div class="col-lg-12 mb-lg-3">
                        <img src="{{ asset('/assets/img/lorentz.jpg') }}" alt="pengukuran"
                            class="img-fluid mx-auto d-block" draggable="false" data-aos="zoom-in"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                    </div>
                    <div class="col-lg-12 mb-lg-3">
                        <p style="font-size: 18px;" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Gaya lorentz ditemukan oleh Herdik Antoon Lorentz pada 1853-1928. Dia ilmuan asal Belanda
                            yang sangat berkontribusi dalam bidang fisika. Gaya lorentz sesungguhnya merupakan gabungan
                            antara gaya elektrik dan gaya magnetik di suatu medan elektromagnetik.
                        </p>
                        <p style="font-size: 18px;" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Gaya lorentz dapat timbul karena adanya muatan listrik di suatu medan magnet. Gaya lorentz
                            memiliki nilai besar dan juga memiliki arah. Pada arah gaya Lorentz menggunakan aturan
                            tangan kanan dan selalu tegak lurus dengan arah kuat arus listrik dan induksi magnetik yang
                            ada.
                        </p>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-around">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <img src="{{ asset('/assets/img/gayamagnet.png') }}" alt="rumusgaya" class="img-fluid mb-3"
                            draggable="false" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">
                        <img src="{{ asset('/assets/img/rumusgaya.jpg') }}" alt="rumusgaya" class="img-fluid"
                            draggable="false" data-aos="zoom-in" data-aos-anchor-placement="top-center"
                            data-aos-duration="1500">
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <p style="font-size: 18px;" align="justify" data-aos="fade-right"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Gaya Lorentz adalah suatu konsep fisika yang menggambarkan interaksi antara medan magnet dan
                            medan listrik terhadap partikel bermuatan. Konsep ini dinamai dari fisikawan Belanda,
                            Hendrik Lorentz, yang mengemukakan teorinya pada awal abad ke-20.
                        </p>
                        <p style="font-size: 18px;" align="justify" data-aos="fade-right"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Gaya Lorentz dapat dinyatakan dengan rumus sebagai berikut: F = B i l sin α
                        </p>
                        <p style="font-size: 18px;" align="justify" data-aos="fade-right"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            dimana F adalah gaya yang diberikan pada partikel bermuatan, B adalah kuat arus medan
                            magnet, i adalah kuat arus yang mengalir , l adalah panjang kawat, dan α adalah sudut yang
                            dibentuk dari B dan i.
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <p style="font-size: 20px" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Jika sebuah partikel bermuatan bergerak dalam medan listrik dan medan magnet, maka gaya
                            Lorentz akan memengaruhi pergerakan partikel tersebut. Jika medan listrik dan medan magnet
                            sejajar, maka partikel bermuatan akan mengalami percepatan dalam arah tertentu. Namun, jika
                            medan listrik dan medan magnet tegak lurus satu sama lain, maka partikel bermuatan akan
                            bergerak dalam lintasan melingkar.
                        </p>
                        <p style="font-size: 20px" align="justify" data-aos="fade-down"
                            data-aos-anchor-placement="top-center" data-aos-duration="1500">
                            Penerapan gaya Lorentz sangat penting dalam berbagai aplikasi teknologi modern, seperti
                            dalam pembangkit listrik, motor listrik, perangkat medis, dan bahkan dalam teknologi
                            penerbangan dan antariksa. Oleh karena itu, pemahaman tentang gaya Lorentz sangat penting
                            bagi para ahli fisika dan ilmuwan lainnya yang ingin memahami dasar-dasar interaksi medan
                            magnet dan medan listrik.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="judul5">
            <div class="container">
                <h1 class="mb-5" data-aos="fade-right" data-aos-anchor-placement="top-center"
                    data-aos-duration="1500">Penerapan</h1>
                <div class="row mb-4 d-flex justify-content-center">

                </div>
            </div>
        </section>

        <section id="judul6">
            <div class="container">
                <h1 class="mb-5" data-aos="fade-right" data-aos-anchor-placement="top-center"
                    data-aos-duration="1500">Aplikasi Perhitungan</h1>
                <div class="row mb-4 d-flex justify-content-center">
                    <form style="z-index: 1">
                        <div class="col-md-6 mb-3">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <h6>Medan Magnet</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Medan Magnet</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h6>Magnet Pada Kawat Berarus</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Magnet Pada Kawat Berarus</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <h6>Induksi magnetik di sekitar arus lurus</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Induksi magnetik di sekitar arus lurus</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            <h6>Induksi magnetik di pusat lingkaran</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Induksi magnetik di pusat lingkaran</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            <h6>Medan magnet pada titik tertentu akibat arus listrik</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Medan magnet pada titik tertentu akibat arus listrik</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            <h6>Medan magnet pada titik tertentu akibat arus kutub magnet</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Medan magnet pada titik tertentu akibat arus kutub magnet</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <h6>Solenoid dan Toroid</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="card card-body">
                                                <h2>Solenoid dan Toroid</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="flush-headingEigth">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEigth"
                                            aria-expanded="false" aria-controls="flush-collapseEigth">
                                            <h6>Gaya Lorentz</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEigth" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingEigth" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h2>Gaya Lorentz</h2>
                                            <div class="">
                                                <label for="m" class="form-label">Muatan Medan Magnet (B)</label>
                                                <input type="text" class="form-control" id="m"
                                                    aria-describedby="m">
                                            </div>
                                            <div class="">
                                                <label for="m" class="form-label">Arus Listrik (i)</label>
                                                <input type="text" class="form-control" id="m"
                                                    aria-describedby="m">
                                            </div>
                                            <div class="">
                                                <label for="m" class="form-label">Panjang Kawat(m)</label>
                                                <input type="text" class="form-control" id="m"
                                                    aria-describedby="m">
                                            </div>
                                            <div class=" mb-3">
                                                <label for="m" class="form-label">Sudut antara B dan i(sin
                                                    0)</label>
                                                <input type="text" class="form-control" id="m"
                                                    aria-describedby="m">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary">Hitung</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
