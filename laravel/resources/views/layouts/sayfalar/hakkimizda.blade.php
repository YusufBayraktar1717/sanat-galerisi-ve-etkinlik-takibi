@extends('layouts.front.layouts')

@section('title', 'Hakkımızda')

@section('content')
    <section class="about-section py-5 bg-light">
        <div class="container">
            <!-- Başlık ve Açıklama -->
            <div class="text-center mb-5">
                <h1 class="display-4 font-weight-bold text-primary animated fadeInUp">Hakkımızda</h1>
                <p class="lead text-muted animated fadeInUp delay-1s">Sanat ve kültürün kalbine hoş geldiniz. Geçmişin eşsiz mirasını geleceğe taşıyoruz.</p>
            </div>

            <!-- Ana İçerik -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <div class="img-container shadow-lg rounded-lg overflow-hidden">
                        <img src="https://enkasanat.org/wp-content/uploads/2015/05/IMG_0282-1024x479.jpg" alt="Sanat Galerisi" class="img-fluid transition-transform transform-hover">
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="text-justify animated fadeInUp delay-2s">
                        Sanat galerimiz, tarih boyunca önemli sanat eserlerini ve kültürel zenginlikleri topluma sunmayı misyon edinmiştir.
                        Sanatın gücüne inanarak, geçmişin eşsiz eserlerini günümüze taşırken, geleceğin sanatçılarına ilham kaynağı olmayı hedefliyoruz.
                    </p>
                    <p class="text-justify animated fadeInUp delay-2s">
                        Sergilerimizde yer alan eşsiz eserler, sanatçıların ruhunu ve yaratıcılığını yansıtmaktadır. Galerimiz, sadece bir sanat merkezi değil; aynı zamanda bir buluşma noktasıdır.
                    </p>
                </div>
            </div>

            <!-- Vizyon ve Misyon Bölümü -->
            <div class="row py-5 bg-white rounded shadow-lg">
                <div class="col-md-4 text-center">
                    <i class="fas fa-paint-brush fa-4x text-primary mb-3"></i>
                    <h4 class="font-weight-bold text-uppercase mb-2">Sanatın Merkezi</h4>
                    <p class="text-muted">Sanatı toplumla buluşturmayı misyon edindik.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-users fa-4x text-primary mb-3"></i>
                    <h4 class="font-weight-bold text-uppercase mb-2">Sanatçılarla Birlikte</h4>
                    <p class="text-muted">Geleceğin sanatçılarına ilham kaynağı oluyoruz.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-globe fa-4x text-primary mb-3"></i>
                    <h4 class="font-weight-bold text-uppercase mb-2">Kültürel Miras</h4>
                    <p class="text-muted">Geçmişin eşsiz mirasını geleceğe taşıyoruz.</p>
                </div>
            </div>

            <!-- Galeri Resimleri -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="img-container shadow-lg rounded-lg overflow-hidden">
                        <img src="https://i0.wp.com/bilimdili.com/wp-content/uploads/2016/11/6a00e54ef168098833017d3d487ef6970c.jpg?fit=990%2C747&ssl=1" alt="Sanat Galerisi" class="img-fluid rounded shadow mb-4 transition-transform transform-hover">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-container shadow-lg rounded-lg overflow-hidden">
                        <img src="https://www.papgift.com/wp-content/uploads/2022/06/unlu-ressamlar-ve-hikayeleri.jpg" alt="Sanat Galerisi" class="img-fluid rounded shadow mb-4 transition-transform transform-hover">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-container shadow-lg rounded-lg overflow-hidden">
                        <img src="https://dnomia-websites-content-images.s3.eu-north-1.amazonaws.com/ecodiurnal/unesco-turkiye-aphrodisias_uzeti6.jpg" alt="Sanat Galerisi" class="img-fluid rounded shadow mb-4 transition-transform transform-hover">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


    <style>
        /* Hover efekti ile fotoğraf büyütme */
        .transition-transform {
            transition: transform 0.3s ease-in-out;
        }

        .transform-hover:hover {
            transform: scale(1.1);
        }

        /* Fotoğraflara özel stil */
        .img-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        /* Text animasyonu */
        .animated {
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        .delay-1s {
            animation-delay: 1s;
        }

        .delay-2s {
            animation-delay: 2s;
        }

        /* Fade in animation */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

