@extends('frontend.layouts.app')

@section('title')
    Berita
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container pb-3">
            <div class="row justify-content-center ">
                <div class="col-12 mt-5">
                    <h1 class="fs-3 fw-600 mb-3 text-center text-stroke-hcb">BERITA HCBSC</h1>
                    <!-- Carousel -->
                    <div id="carouselExampleCaptions" class="carousel slide mb-3">
                        <div class="carousel-inner">
                            @foreach ($latest as $key => $news)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <a href="{{ route('detail.berita', $news->slug) }}">
                                        <div class="ratio ratio-16x9">
                                            <img src="{{ asset('storage/post/' . $news->image) }}" class="d-block w-100"
                                                alt="{{ $news->slug }}">
                                        </div>
                                        <div class="carousel-caption d-block text-white bg-dark bg-opacity-50 p-2 rounded">
                                            <h5 class="fw-bold mb-0 fs-6 fs-md-3 fs-lg-2">
                                                {{ Str::limit($news->title, 50) }}
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

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

                        <div class="d-flex justify-content-center mt-4">
                            {{ $beritas->links() }}
                        </div>

                    </div>

                    <div class="container my-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/PjjTb6UVwsk"
                                title="Putri Azizah Haryanto, Juara I Ladies Standard Division Lomba Menembak Piala Danpaspampres"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
