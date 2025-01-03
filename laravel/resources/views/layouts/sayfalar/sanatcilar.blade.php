{{-- resources/views/artists/index.blade.php --}}
@extends('layouts.front.layouts')

@section('content')
    <div class="container mt-4">
        <h1>Sanatçılar</h1>
        <div class="row">
            @foreach ($artists as $artist)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Sanatçının Fotoğrafı -->
                        <img src="{{ $artist->foto_url }}" class="card-img-top" alt="{{ $artist->name }} Fotoğrafı" style="height: 250px; object-fit: cover;">

                        <div class="card-body">
                            <h5 class="card-title">{{ $artist->name }}</h5>
                            <p><strong>Doğum Tarihi:</strong> {{ $artist->dogum_tarihi }}</p>
                            <!-- Modal açma butonu -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#artistModal{{ $artist->id }}">
                                Detayları Gör
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="artistModal{{ $artist->id }}" tabindex="-1" aria-labelledby="artistModalLabel{{ $artist->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="artistModalLabel{{ $artist->id }}">{{ $artist->name }} - Biyografi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $artist->biyografi }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

