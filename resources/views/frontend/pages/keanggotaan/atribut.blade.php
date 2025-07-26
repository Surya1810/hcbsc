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
                <div class="col-12 col-md-10" style="margin-top: 7rem">
                    <div class="card glass-card rounded-4">
                        <div class="card-body">
                            <h1 class="fs-3 fw-600 mb-3 text-center text-stroke-primary">Atribut HCBSC</h1>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/topi_kiri.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/topi_kanan.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/polo_depan.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/polo_belakang.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/rompi.png') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/nama.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="{{ asset('assets/etc/kaos.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="{{ asset('assets/etc/kemeja.png') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div>
                                {{-- <div class="col-12 col-md-2">
                                    <img src="{{ asset('assets/etc/plakat.webp') }}" alt="topi" class="img-fluid"
                                        loading="lazy">
                                </div> --}}
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
