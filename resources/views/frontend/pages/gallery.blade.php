@extends('frontend.layouts.app')

@section('title')
    Atribut
@endsection

@push('css')
@endpush

@section('content')
    <!-- Gallery -->
    <section style="min-width: 100svw;background-color: #212121;" class="py-5">
        <div class="container">
            <h2 class="text-hcb text-center mb-5"><strong>Foto</strong></h2>
            <div class="row g-2">

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133%;">
                        <img src="{{ asset('assets/photo/11.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 1">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133%;">
                        <img src="{{ asset('assets/photo/8.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 2">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/1.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 1">
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

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/9.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 3">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/16.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 4">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/13.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/5.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/20.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 3">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/3.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 4">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/18.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 3">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/15.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 4">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/10.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/7.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/6.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 3">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/2.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 4">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/12.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 3">
                    </div>
                </div>

                <!-- Portrait -->
                <div class="col-6 col-md-3">
                    <div class="ratio" style="--bs-aspect-ratio: 133.33%;">
                        <img src="{{ asset('assets/photo/19.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Portrait 4">
                    </div>
                </div>

                <!-- Landscape -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('assets/photo/21.jpg') }}" class="img-fluid object-fit-cover rounded"
                            alt="Landscape 2">
                    </div>
                </div>

                <h2 class="text-hcb text-center mt-5"><strong>Video</strong></h2>
                <div class="row g-2 justify-content-center">

                    <div class="col-12 col-md-4">
                        <div class="ratio ratio-16x9">
                            <video class="rounded" controls>
                                <source src="{{ asset('assets/video/video_1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="ratio ratio-16x9">
                            <video class="rounded" controls>
                                <source src="{{ asset('assets/video/video_2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="ratio ratio-16x9">
                            <video class="rounded" controls>
                                <source src="{{ asset('assets/video/video_3.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@push('scripts')
@endpush
