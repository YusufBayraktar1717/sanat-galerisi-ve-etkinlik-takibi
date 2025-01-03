@extends('layouts.front.layouts')

@section('title', 'Sergiler')

@section('content')

    <section class="sergiler-section py-5 bg-light">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="display-4 font-weight-bold text-primary">Sergilerimiz</h1>
                <p class="lead text-muted">Sanat galerimizdeki en son sergileri keşfedin.</p>
            </div>

            <!-- CSS Stil Başlangıcı -->
            <style>
                .card {
                    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
                }

                .card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                }

                .card-img-top {
                    height: 250px;
                    object-fit: cover;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    border-radius: 10px;
                }

                .card-img-top:hover {
                    transform: scale(1.1);
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                }

                .badge-success {
                    background-color: #28a745;
                }

                .badge-secondary {
                    background-color: #6c757d;
                }
            </style>
            <!-- CSS Stil Sonu -->

            <div class="row">
                <!-- Sergi 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <!-- Manuel olarak fotoğraf ekleniyor -->
                        <img src=https://files.oaiusercontent.com/file-My1HEKqzWAvJyC1M6b7KNW?se=2025-01-03T13%3A28%3A59Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3Db221328d-2dbd-4d5d-9ce4-7a08dd32a802.webp&sig=lpJH%2BcA7oO8qVGnTOySxi4sOSy%2BGrNF%2BViRHkWAm%2Bn8%3D alt="Renkli Dünyalar" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Renkli Dünyalar</h5>
                            <p class="card-text text-muted">Birçok renk ve formu keşfedin.</p>
                            <p class="text-right text-primary"><strong>Başlangıç Tarihi:</strong> 01 Şubat, 2025</p>
                            <p class="text-right text-primary"><strong>Bitiş Tarihi:</strong> 28 Şubat, 2025</p>
                            <p class="text-right">
                                <span class="badge badge-success">
                                    Sergileniyor
                                </span>
                            </p>
                            <a href="#" class="btn btn-primary btn-block">Detayları Gör</a>
                        </div>
                    </div>
                </div>

                <!-- Sergi 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <!-- Manuel olarak fotoğraf ekleniyor -->
                        <img src="https://galataport.com/cdn/uploads/000004719_yuzen-adalar.jpg" alt="Modern Sanat" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Modern Sanat</h5>
                            <p class="card-text text-muted">Modern sanatın en güzel örnekleri.</p>
                            <p class="text-right text-primary"><strong>Başlangıç Tarihi:</strong> 01 Mart, 2025</p>
                            <p class="text-right text-primary"><strong>Bitiş Tarihi:</strong> 30 Mart, 2025</p>
                            <p class="text-right">
                                <span class="badge badge-secondary">
                                    Sergilenmiyor
                                </span>
                            </p>
                            <a href="#" class="btn btn-primary btn-block">Detayları Gör</a>
                        </div>
                    </div>
                </div>

                <!-- Sergi 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <!-- Manuel olarak fotoğraf ekleniyor -->
                        <img src="data:image/jpeg;base64,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" alt="Geçmişin İzleri" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Geçmişin İzleri</h5>
                            <p class="card-text text-muted">Geçmişin en değerli izlerini keşfedin.</p>
                            <p class="text-right text-primary"><strong>Başlangıç Tarihi:</strong> 10 Nisan, 2025</p>
                            <p class="text-right text-primary"><strong>Bitiş Tarihi:</strong> 25 Nisan, 2025</p>
                            <p class="text-right">
                                <span class="badge badge-success">
                                    Sergileniyor
                                </span>
                            </p>
                            <a href="#" class="btn btn-primary btn-block">Detayları Gör</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
