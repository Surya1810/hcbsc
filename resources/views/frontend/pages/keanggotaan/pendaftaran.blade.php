@extends('frontend.layouts.app')

@section('title')
    Pendaftaran
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container pb-3">
            <div class="row justify-content-center ">
                <h1 class="fs-3 fw-600 text-center text-stroke-primary mt-5">Pendaftaran Keanggotaan</h1>
                <div class="col-12 col-md-10 mt-3">
                    <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card glass-card rounded-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="name" class="mb-0 form-label col-form-label-sm">Nama
                                                        Lengkap</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name" placeholder="Tulis nama anda"
                                                        value="{{ old('name') }}" required>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="nik"
                                                        class="mb-0 form-label col-form-label-sm">NIK</label>
                                                    <input type="text"
                                                        class="form-control @error('nik') is-invalid @enderror"
                                                        id="nik" name="nik" placeholder="Tulis NIK anda"
                                                        value="{{ old('nik') }}" required>
                                                    @error('nik')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="phone"
                                                        class="mb-0 form-label col-form-label-sm">Telepon</label>
                                                    <input type="number"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        id="phone" name="phone" placeholder="Tulis nomor telepon anda"
                                                        value="{{ old('phone') }}" required>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="birth" class="mb-0 form-label col-form-label-sm">Tanggal
                                                        Lahir</label>
                                                    <input type="date"
                                                        class="form-control @error('birth') is-invalid @enderror"
                                                        id="birth" name="birth" value="{{ old('birth') }}" required>
                                                    @error('birth')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="darah" class="mb-0 form-label col-form-label-sm">Golongan
                                                        Darah</label>
                                                    <input type="text"
                                                        class="form-control @error('darah') is-invalid @enderror"
                                                        id="darah" name="darah"
                                                        placeholder="Tulis golongan darah anda" value="{{ old('darah') }}"
                                                        required>
                                                    @error('darah')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="ukuran" class="mb-0 form-label col-form-label-sm">Ukuran
                                                        Baju</label>
                                                    <input type="text"
                                                        class="form-control @error('ukuran') is-invalid @enderror"
                                                        id="ukuran" name="ukuran" placeholder="Tulis ukuran baju anda"
                                                        value="{{ old('ukuran') }}" required>
                                                    @error('ukuran')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="address"
                                                        class="mb-0 form-label col-form-label-sm">Alamat</label>
                                                    <input type="text"
                                                        class="form-control @error('address') is-invalid @enderror"
                                                        id="address" name="address" placeholder="Tulis alamat anda"
                                                        value="{{ old('address') }}" required>
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="pengcab"
                                                        class="mb-0 form-label col-form-label-sm">Pengcab</label>
                                                    <input type="text"
                                                        class="form-control @error('pengcab') is-invalid @enderror"
                                                        id="pengcab" name="pengcab" placeholder="Tulis pengcab anda"
                                                        value="{{ old('pengcab') }}" required>
                                                    @error('pengcab')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="pengprov"
                                                        class="mb-0 form-label col-form-label-sm">Pengprov</label>
                                                    <input type="text"
                                                        class="form-control @error('pengprov') is-invalid @enderror"
                                                        id="pengprov" name="pengprov" placeholder="Tulis pengprov anda"
                                                        value="{{ old('pengprov') }}" required>
                                                    @error('pengprov')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="jabatan_1"
                                                        class="mb-0 form-label col-form-label-sm">Jabatan dalam
                                                        HCBSC</label>
                                                    <input type="text"
                                                        class="form-control @error('jabatan_1') is-invalid @enderror"
                                                        id="jabatan_1" name="jabatan_1" placeholder="Tulis jabatan anda"
                                                        value="{{ old('jabatan_1') }}">
                                                    @error('jabatan_1')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="jabatan_2"
                                                        class="mb-0 form-label col-form-label-sm">Jabatan dalam
                                                        Pengcab</label>
                                                    <input type="text"
                                                        class="form-control @error('jabatan_2') is-invalid @enderror"
                                                        id="jabatan_2" name="jabatan_2" placeholder="Tulis jabatan anda"
                                                        value="{{ old('jabatan_2') }}">
                                                    @error('jabatan_2')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="jabatan_3"
                                                        class="mb-0 form-label col-form-label-sm">Jabatan dalam
                                                        Pengprov</label>
                                                    <input type="text"
                                                        class="form-control @error('jabatan_3') is-invalid @enderror"
                                                        id="jabatan_3" name="jabatan_3" placeholder="Tulis jabatan anda"
                                                        value="{{ old('jabatan_3') }}">
                                                    @error('jabatan_3')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="jabatan_4"
                                                        class="mb-0 form-label col-form-label-sm">Jabatan dalam PB</label>
                                                    <input type="text"
                                                        class="form-control @error('jabatan_4') is-invalid @enderror"
                                                        id="jabatan_4" name="jabatan_4" placeholder="Tulis jabatan anda"
                                                        value="{{ old('jabatan_4') }}">
                                                    @error('jabatan_4')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label col-form-label-sm">Prestasi 1</label>
                                                <div class="row g-2">
                                                    <div class="col-md-5">
                                                        <input type="text" name="prestasi_1_event"
                                                            class="form-control" placeholder="Nama Event/Lomba"
                                                            value="{{ old('prestasi_1_event', $anggota->prestasi_1_event ?? '') }}">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="prestasi_1_tahun"
                                                            class="form-control" placeholder="Tahun"
                                                            value="{{ old('prestasi_1_tahun', $anggota->prestasi_1_tahun ?? '') }}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="prestasi_1_peringkat"
                                                            class="form-control" placeholder="Peringkat"
                                                            value="{{ old('prestasi_1_peringkat', $anggota->prestasi_1_peringkat ?? '') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Prestasi 2 -->
                                            <div class="col-12">
                                                <label class="form-label col-form-label-sm">Prestasi 2</label>
                                                <div class="row g-2">
                                                    <div class="col-md-5">
                                                        <input type="text" name="prestasi_2_event"
                                                            class="form-control" placeholder="Nama Event/Lomba"
                                                            value="{{ old('prestasi_2_event', $anggota->prestasi_2_event ?? '') }}">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="prestasi_2_tahun"
                                                            class="form-control" placeholder="Tahun"
                                                            value="{{ old('prestasi_2_tahun', $anggota->prestasi_2_tahun ?? '') }}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="prestasi_2_peringkat"
                                                            class="form-control" placeholder="Peringkat"
                                                            value="{{ old('prestasi_2_peringkat', $anggota->prestasi_2_peringkat ?? '') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Prestasi 3 -->
                                            <div class="col-12">
                                                <label class="form-label col-form-label-sm">Prestasi 3</label>
                                                <div class="row g-2">
                                                    <div class="col-md-5">
                                                        <input type="text" name="prestasi_3_event"
                                                            class="form-control" placeholder="Nama Event/Lomba"
                                                            value="{{ old('prestasi_3_event', $anggota->prestasi_3_event ?? '') }}">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" name="prestasi_3_tahun"
                                                            class="form-control" placeholder="Tahun"
                                                            value="{{ old('prestasi_3_tahun', $anggota->prestasi_3_tahun ?? '') }}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="prestasi_3_peringkat"
                                                            class="form-control" placeholder="Peringkat"
                                                            value="{{ old('prestasi_3_peringkat', $anggota->prestasi_3_peringkat ?? '') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="mb-0 form-label col-form-label-sm"
                                                            for="ktp">KTP
                                                        </label>
                                                        <input class="form-control @error('ktp') is-invalid @enderror"
                                                            type="file" id="ktp" name="ktp" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="mb-0 form-label col-form-label-sm"
                                                            for="kta">Upload KTA
                                                            <small class="text-danger">*gabungkan 1
                                                                file, bila ada</small>
                                                        </label>
                                                        <input class="form-control @error('kta') is-invalid @enderror"
                                                            type="file" id="kta" name="kta">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="mb-0 form-label col-form-label-sm"
                                                            for="image">Pas
                                                            Foto
                                                        </label>
                                                        <input class="form-control @error('image') is-invalid @enderror"
                                                            type="file" id="image" name="image"
                                                            accept="image/png, image/jpeg, image/jpg, image/webp" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning rounded-5 float-right">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });
    </script>
@endpush
