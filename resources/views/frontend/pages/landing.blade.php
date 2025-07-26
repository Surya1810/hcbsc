@extends('frontend.layouts.app')

@section('title')
    Beranda
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes_main d-flex align-items-center">
        <div class="container-fluid">
            <!-- Wrapper seluruh konten -->
            <div class="row justify-content-center align-items-start">

                <!-- Baris Logo Kecil -->
                <div class="col-12 mb-5">
                    <div class="row justify-content-center g-1">
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/ipsc.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/wrabf.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/issf.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/imssu.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/koni_jabar.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/perbakin.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/perbakin_jabar.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 d-flex justify-content-center">
                            <img src="{{ asset('assets/logo/hcb.webp') }}" alt="Logo" class="img-fluid"
                                style="max-height: 75px;">
                        </div>
                    </div>
                </div>

                <!-- Gambar Utama -->
                <div class="col-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <img src="{{ asset('assets/logo/hcb_main.webp') }}" class="img-fluid" alt="HCBSC"
                                style="max-width: 50%;" loading="lazy">
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('assets/logo/hcbsc_text.webp') }}" class="img-fluid" alt="HCBSC Text"
                                style="max-width: 50%;" loading="lazy">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sambutan -->
    <section class="heroes py-5 text-white">
        <div class="container">
            <div class="card glass-card-dark">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="text-white fw-bold mb-5"
                            style="border-bottom: 3px solid #e0b256; display: inline-block;">
                            Sambutan Kehormatan
                        </h2>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                            <img src="{{ asset('assets/photo/komjen_rudy.webp') }}" class="img-fluid rounded"
                                alt="Komjen" style="max-width: 70%">
                        </div>
                        <div class="col-md-8">
                            <p class="fs-5 text-white">
                                <span class="display-5 text-warning">“</span>
                                Dalam dunia yang terus berubah, satu hal yang harus tetap kita jaga adalah <strong>ketajaman
                                    disiplin</strong> dan <strong>kesetiaan terhadap tujuan</strong>. HCB Shooting Club
                                bukan hanya
                                tempat menembak — tetapi medan untuk melatih <strong>ketepatan, konsentrasi, dan karakter
                                    kepemimpinan</strong>.
                            </p>
                            <p class="fst-italic text-end text-warning">— Komjen Pol.Prof.DR.Rudy Heriyanto A.N.,SH.MH.MBA.,
                                Pelindung
                            </p>
                        </div>
                    </div>

                    <!-- Garis pemisah -->
                    <hr class="border-light my-5" />

                    <div class="row align-items-center flex-md-row-reverse">
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                            <img src="{{ asset('assets/photo/haji_cheppy.webp') }}" class="img-fluid rounded"
                                style="max-width: 70%" alt="Ketua HCBSC">
                        </div>
                        <div class="col-md-8">
                            <p class="fs-5 text-white">
                                <span class="display-5 text-warning">“</span>
                                Kepada seluruh anggota HCBSC, mari kita jadikan komunitas ini sebagai wadah untuk tumbuh,
                                bukan
                                hanya sebagai atlet, tetapi sebagai pribadi yang tangguh. <strong>Satu tembakan, satu
                                    tekad</strong>
                                — karena setiap peluru yang melesat adalah lambang dari <strong>fokus, niat, dan semangat
                                    kebersamaan</strong>.
                            </p>
                            <p class="fst-italic text-end text-warning">— H. Cheppy, Ketua HCB Shooting Club</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3 g-2">
                <div class="col-12">
                    <div class="card glass-card-dark rounded-4">
                        <div class="card-body">
                            <h1 class="fs-3 fw-600 mb-3 text-center text-stroke-primary">Keanggotaan HCB Shooting Club
                            </h1>
                            <div class="row align-items-center mb-4">
                                <div class="col-md-8">
                                    <p class="text-warning">Hanya anggota resmi dan asli <i><strong>HCB Shooting
                                                Club</strong></i> yang
                                        terdaftar di website ini.</p>
                                    <form action="{{ route('keanggotaan.cek') }}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="query" class="form-control"
                                                placeholder="Masukkan Nama atau Nomor Keanggotaan" required>
                                            <button type="submit" class="btn btn-warning">Cek</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4 text-center mb-3 mb-md-0">
                                    <img src="{{ asset('assets/logo/hcb_bw.webp') }}" alt="HCB Logo" class="img-fluid"
                                        width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h1 class="fs-3 fw-600 mb-3 text-center text-stroke-primary">BERITA HCBSC</h1>
                    <div class="row mt-2">
                        @foreach ($beritas as $berita)
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <a href="{{ route('detail.berita', $berita->slug) }}"
                                        class="text-decoration-none text-black">
                                        <div class="row g-0 h-100">
                                            <div class="col-md-6">
                                                <div
                                                    style="position: relative; width: 100%; padding-top: 56.25%; overflow: hidden; border-top-left-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                                                    <img src="{{ asset('storage/post/' . $berita->image) }}"
                                                        alt="{{ $berita->slug }}"
                                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">

                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex flex-column justify-content-between p-3">
                                                <div>
                                                    <div class="mb-1 text-body-secondary">
                                                        {{ \Carbon\Carbon::parse($berita->created_at)->format('M d') }}
                                                    </div>
                                                    <h5 class="card-title mb-2">{{ Str::limit($berita->title, 50) }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('berita') }}" class="btn btn-warning"><strong>Selengkapnya</strong></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section style="min-height: 100svh; background-color: #212121;" class="py-5">
        <div class="container text-center">
            <h2 class="text-warning text-center mb-5"><strong>Galeri</strong></h2>
            <div class="row g-4">

                <!-- Landscape -->
                <div class="col-12 col-md-4">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/1.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 1">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-2">
                    <div class="ratio" style="--bs-aspect-ratio: 133%;">
                        <img src="{{ asset('assets/photo/11.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 1">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-2">
                    <div class="ratio" style="--bs-aspect-ratio: 133%;">
                        <img src="{{ asset('assets/photo/8.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 2">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-4">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/10.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>
                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/14.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/4.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 3">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/17.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 4">
                    </div>
                </div>

            </div>
            <a href="{{ route('galeri') }}" class="btn btn-outline-warning mt-4">Lihat Selengkapnya</a>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
