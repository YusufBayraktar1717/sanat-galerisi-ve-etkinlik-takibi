<!-- resources/views/auctions/index.blade.php -->

@extends('layouts.front.layouts')

@section('title', 'Müzayedeler')

@section('content')
    <section class="auctions-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-4 font-weight-bold text-primary">Müzayede Sayfası</h1>
                <p class="lead text-muted">Eşsiz sanat eserlerinin açık artırma fırsatları.</p>
            </div>

            <!-- Aktif Müzayede -->
            <div class="mb-5">
                <h3 class="text-primary">Aktif Müzayedeler</h3>
                <div class="row">
                    @foreach ($activeAuctions as $auction)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="data:image/jpeg;base64,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">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $auction->ad }}</h5>
                                    <p class="card-text">{{ Str::limit($auction->aciklama, 100) }}</p>
                                    <p><strong>Başlangıç Fiyatı:</strong> {{ number_format($auction->baslangic_fiyati, 2) }} ₺</p>
                                    <p><strong>Durum:</strong> {{ ucfirst($auction->durum) }}</p>

                                    <a href="#" class="btn btn-success">Satın Al</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Geçmiş Müzayedeler -->
            <div class="mb-5">
                <h3 class="text-secondary">Geçmiş Müzayedeler</h3>
                <div class="row">
                    @foreach ($completedAuctions as $auction)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/' . $auction->work->image_path) }}" class="card-img-top" alt="{{ $auction->work->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $auction->ad }}</h5>
                                    <p class="card-text">{{ Str::limit($auction->aciklama, 100) }}</p>
                                    <p><strong>Başlangıç Fiyatı:</strong> {{ number_format($auction->baslangic_fiyati, 2) }} ₺</p>
                                    <p><strong>Durum:</strong> {{ ucfirst($auction->durum) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
