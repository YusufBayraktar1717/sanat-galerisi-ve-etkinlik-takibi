@extends('layouts.front.layouts')

@section('title', 'İletişim')

@section('content')
    <section class="contact-section py-5 bg-light">
        <div class="container">
            <!-- Başlık ve Açıklama -->
            <div class="text-center mb-5">
                <h1 class="display-4 font-weight-bold text-primary">Bizimle İletişime Geçin</h1>
                <p class="lead text-muted">Sanat ve kültürle ilgili her türlü sorunuz için bizlere ulaşabilirsiniz. Yardımcı olmaktan memnuniyet duyarız!</p>
            </div>

            <!-- İletişim Formu -->
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Adınız Soyadınız</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-posta Adresiniz</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Mesajınız</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </form>
                </div>

                <!-- Harita -->
                <div class="col-md-6">
                    <div class="map-responsive">
                        <!-- Örnek bir Google Maps iframe ekliyoruz -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799236186!2d-74.259867!3d40.6971494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ae8db13f25%3A0x19d9f015c5b2a416!2sNew+York!5e0!3m2!1sen!2sus!4v1634873807762!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Bölümü -->
    <footer class="bg-dark text-white py-3 text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Sanat Galerisi - Tüm Hakları Saklıdır.</p>
    </footer>
@endsection
