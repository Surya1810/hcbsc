@extends('frontend.layouts.app')

@section('title')
    {{ $news->slug }}
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container pb-3">
            <div class="row g-5">
                <div class="col-md-8 bg-light" style="margin-top: 10rem">
                    <article class="blog-post">
                        <img src="{{ asset('storage/post/' . $news->image) }}" class="d-block w-100 my-3"
                            alt="{{ $news->slug }}">
                        <h2 class="display-5 link-body-emphasis mb-1"><strong>{{ $news->title }}</strong></h2>
                        <p class="blog-post-meta"> {{ \Carbon\Carbon::parse($news->created_at)->format('M d') }}</p>
                        {!! $news->body !!}
                    </article>
                </div>
                <div class="col-md-4" style="margin-top: 10rem">
                    <div class="position-sticky" style="top: 2rem;">
                        <div>
                            <h4 class="fst-italic">Berita Terbaru</h4>
                            <ul class="list-unstyled">
                                @foreach ($latest as $berita)
                                    <li>
                                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                            href="#"> <img src="{{ asset('storage/post/' . $berita->image) }}"
                                                class="d-block w-100" alt="{{ $berita->slug }}" height="96">
                                            <div class="col-lg-8">
                                                <h6 class="mb-0">{{ Str::limit($berita->title, 50) }}</h6> <small
                                                    class="text-body-secondary">{{ \Carbon\Carbon::parse($berita->created_at)->format('M d') }}</small>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#agendaTable').DataTable({
                responsive: true,
                autoWidth: false,
                headerCallback: function(thead, data, start, end, display) {
                    $(thead).css('background-color', '#000');
                    $(thead).css('color', '#FFD700');
                },
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Cari data...",
                    lengthMenu: "Tampilkan _MENU_ data",
                    zeroRecords: "Data tidak ditemukan",
                    info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                    infoEmpty: "Tidak ada data",
                    infoFiltered: "(difilter dari _MAX_ total data)",
                    paginate: {
                        previous: "Sebelumnya",
                        next: "Berikutnya"
                    }
                }
            });
        });
    </script>
@endpush
