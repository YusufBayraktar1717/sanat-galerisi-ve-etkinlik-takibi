@extends('layouts.front.layouts')

@section('content')
    <style>
        .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Box-shadow ekleyerek daha dikkat çekici hale getirebiliriz */
        }

        .card-img-top:hover {
            transform: scale(1.2); /* Fotoğrafın büyümesi */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Fotoğrafın etrafına gölge ekler */
        }

    </style>
    <div class="container">
        <h1 class="my-4">Tüm Eserler</h1>
        <div class="row">
            @foreach ($works as $work)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $work->workImage->dosya_yolu }}" alt="{{ $work->eser_isim }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $work->eser_isim }}</h5>
                            <p class="card-text">
                                Yapıldığı Yıl: {{ $work->yapilidigi_yil }}<br>
                                Sergilendiği Yer ID: {{ $work->city->sehir_Ad }}<br>
                                Kategori ID: {{ $work->kategori_id }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
