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
                <div class="col-12 col-md-10" style="margin-top: 7rem">
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
                                            <div class="col-12 col-md-6">
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
                                            <div class="col-12">
                                                <label for="prestasi"
                                                    class="mb-0 form-label col-form-label-sm">Prestasi</label>
                                                <textarea name="prestasi" id="prestasi" rows="5" class="w-100" placeholder="Tulis prestasi anda..."></textarea>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="mb-0 form-label col-form-label-sm"
                                                            for="ktp">KTP
                                                            <small class="text-danger">*format PDF</small>
                                                        </label>
                                                        <input class="form-control @error('ktp') is-invalid @enderror"
                                                            type="file" id="ktp" name="ktp"
                                                            accept="application/pdf" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="mb-0 form-label col-form-label-sm"
                                                            for="kta">Upload KTA
                                                            <small class="text-danger">*gabungkan dalam 1 file PDF</small>
                                                        </label>
                                                        <input class="form-control @error('kta') is-invalid @enderror"
                                                            type="file" id="kta" name="kta"
                                                            accept="application/pdf" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="mb-0 form-label col-form-label-sm"
                                                            for="image">Pas
                                                            Foto
                                                            <small class="text-danger">*format
                                                                png,jpeg,jpg,webp</small>
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
