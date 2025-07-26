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
                                        <img src="{{ asset('assets/logo/hcb_bw.webp') }}" alt="HCB Logo"
                                            class="img-fluid mt-3" width="150">
                                    </div>
                                </div>

                                {{-- Hasil pencarian --}}
                                @if (request()->has('query'))
                                    @if ($anggota)
                                        @if ($anggota->status === 'verified')
                                            <div class="row mt-4">
                                                {{-- FOTO DAN QR --}}
                                                <div class="col-md-4 text-center">
                                                    @if ($anggota->image)
                                                        <img src="{{ asset('storage/anggota/' . $anggota->image) }}"
                                                            alt="Foto Anggota" class="img-fluid rounded mb-3"
                                                            style="max-width: 100%; height: auto;">
                                                    @endif

                                                    @if ($anggota->nomor)
                                                        @if (file_exists(public_path('storage/qrcodes/' . $anggota->nomor . '.svg')))
                                                            <img src="{{ asset('storage/qrcodes/' . $anggota->nomor . '.svg') }}"
                                                                alt="QR Code" class="img-fluid my-3"
                                                                style="max-width: 200px;">
                                                        @endif
                                                    @endif
                                                </div>

                                                {{-- DATA DIRI --}}
                                                <div class="col-md-8">
                                                    <div class="card bg-dark text-white border-light">
                                                        <div class="card-body">
                                                            <h4 class="mb-3 text-warning"><strong>Data Diri Anggota</strong>
                                                            </h4>
                                                            <dl class="row mb-0">
                                                                <dt class="col-sm-4">Nomor</dt>
                                                                <dd class="col-sm-8">{{ $anggota->nomor }}</dd>

                                                                <dt class="col-sm-4">Nama</dt>
                                                                <dd class="col-sm-8">{{ $anggota->name }}</dd>

                                                                <dt class="col-sm-4">NIK</dt>
                                                                <dd class="col-sm-8">{{ $anggota->nik }}</dd>

                                                                <dt class="col-sm-4">Tanggal Lahir</dt>
                                                                <dd class="col-sm-8">{{ $anggota->birth->format('d-m-Y') }}
                                                                </dd>

                                                                <dt class="col-sm-4">Alamat</dt>
                                                                <dd class="col-sm-8">{{ $anggota->address }}</dd>

                                                                <dt class="col-sm-4">Nomor HP</dt>
                                                                <dd class="col-sm-8">{{ $anggota->phone }}</dd>
                                                                <dt class="col-sm-4">Pengcab</dt>
                                                                <dd class="col-sm-8">{{ $anggota->pengcab }}</dd>
                                                                <dt class="col-sm-4">Pengprov</dt>
                                                                <dd class="col-sm-8">{{ $anggota->pengprov }}</dd>
                                                                <dt class="col-sm-4">Prestasi</dt>
                                                                <dd class="col-sm-8">
                                                                    @isset($anggota->prestasi)
                                                                    @else
                                                                        -
                                                                    @endisset
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
