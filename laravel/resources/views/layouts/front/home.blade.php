@extends('layouts.master')

@section('title', 'Ana Sayfa')

@section('carousel')
    @include('partials.carousel')
@endsection

@section('content')
    <!-- Sanatçılar, Resimler, Heykeller, Baskılar -->
    <div class="container mt-5">
        <h3 class="text-center">Sanatçılar ve Eserler</h3>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="artist.jpg" class="card-img-top" alt="Sanatçı Resmi">
                    <div class="card-body">
                        <h5 class="card-title">Sanatçılar</h5>
                        <p class="card-text">Sanatçılar hakkında bilgi...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="sculpture.jpg" class="card-img-top" alt="Heykel">
                    <div class="card-body">
                        <h5 class="card-title">Heykeller</h5>
                        <p class="card-text">Heykeller hakkında bilgi...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="prints.jpg" class="card-img-top" alt="Baskı">
                    <div class="card-body">
                        <h5 class="card-title">Baskılar</h5>
                        <p class="card-text">Baskılar hakkında bilgi...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="exhibitions.jpg" class="card-img-top" alt="Sergiler">
                    <div class="card-body">
                        <h5 class="card-title">Sergiler</h5>
                        <p class="card-text">Sergiler hakkında bilgi...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rastgele Eserler ve Fiyatlar -->
    <div class="container mt-5">
        <h3 class="text-center">Rastgele Eserler</h3>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="artwork1.jpg" class="card-img-top" alt="Eser">
                    <div class="card-body">
                        <h5 class="card-title">Eser 1</h5>
                        <p class="card-text">Fiyat: 500₺</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="artwork2.jpg" class="card-img-top" alt="Eser">
                    <div class="card-body">
                        <h5 class="card-title">Eser 2</h5>
                        <p class="card-text">Fiyat: 700₺</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
