    @extends('frontend.layouts.app')

    @section('title')
        Cek Keanggotaan
    @endsection

    @push('css')
    @endpush

    @section('content')
        <!-- Heroes -->
        <section class="heroes">
            <div class="container pb-3">
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-10" style="margin-top: 7rem">
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

                                {{-- Hasil pencarian --}}
                                @if (request()->has('query'))
                                    @if ($anggota)
                                        @if ($anggota->status === 'verified')
                                            {{-- TAMPILKAN DATA DIRI DAN KTA --}}
                                        @elseif($anggota->status === 'pending')
                                            <div class="alert alert-warning mt-3">Status: Pendaftaran Anda masih dalam
                                                proses verifikasi.</div>
                                        @elseif($anggota->status === 'rejected')
                                            <div class="alert alert-danger mt-3">Status: Maaf, pendaftaran Anda ditolak.
                                            </div>
                                        @endif
                                    @else
                                        <div class="alert alert-danger mt-3">404 - Data tidak ditemukan.</div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @push('scripts')
    @endpush
