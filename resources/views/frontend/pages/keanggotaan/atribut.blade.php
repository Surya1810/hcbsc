@extends('frontend.layouts.app')

@section('title')
    Atribut
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container pb-3">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-10 mt-5">
                    <div class="card glass-card rounded-4">
                        <div class="card-body">
                            <h1 class="fs-3 fw-600 mb-3 text-center text-stroke-hcb">Atribut HCBSC</h1>
                            <div class="row g-2">
                                <div class="col-6 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/topi_kiri.webp') }}" class="img-fluid" loading="lazy"
                                        style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/topi_kanan.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/polo_depan.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/polo_belakang.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12  col-md-4 text-center">
                                    <img src="{{ asset('assets/etc/rompi.png') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <img src="{{ asset('assets/etc/kaos.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <img src="{{ asset('assets/etc/kemeja.png') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/map.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/plakat.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/nama.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 col-md-3 text-center">
                                    <img src="{{ asset('assets/etc/pataka.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-6 col-md-6 text-center">
                                    <img src="{{ asset('assets/etc/kta_depan.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-6 col-md-6 text-center">
                                    <img src="{{ asset('assets/etc/kta_belakang.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                                <div class="col-12 text-center">
                                    <img src="{{ asset('assets/etc/spanduk.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy" style="max-height: 150px; object-fit: contain;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
