@extends('frontend.layouts.app')

@section('title')
    Beranda
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes_main">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/logo/hcb_main.webp') }}" class="d-block mx-lg-auto img-fluid" alt="HCBSC"
                        width="70%" loading="lazy">
                </div>
                <div class="d-none d-md-block col-12 col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-stroke-primary">Selamat Datang</h1>
                    <p><strong>Harley Club Bandung Shooting Club</strong></p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
