@extends('frontend.layouts.app')

@section('title')
    Buat Berita
@endsection

@push('css')
    <script src="https://cdn.tiny.cloud/1/4ce77u0y45a0kxjxqgmq8hyqdgrqd8pdetaervdmri41d1qa/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#body', // Replace this CSS selector to match the placeholder element for TinyMCE
            // plugins: 'powerpaste advcode code table lists checklist',
            // toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table | alignleft aligncenter alignright alignjustify | outdent indent'
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes_main d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-12">
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline rounded-web card-secondary">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <h3 class="card-title">Buat Berita</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="title" class="mb-0 form-label col-form-label-sm">Judul</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" placeholder="Tulis judul berita"
                                                value="{{ old('title') }}">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <label class="mb-0 form-label col-form-label-sm" for="image">Pilih
                                                        file
                                                        <small class="text-danger">*Thumbnail ratio 4:3</small>
                                                    </label>
                                                    <input class="form-control @error('image') is-invalid @enderror"
                                                        type="file" id="image" name="image"
                                                        accept="image/png, image/jpeg, image/jpg, image/webp">
                                                </div>
                                            </div>
                                        </div>

                                        <textarea name="body" id="body" placeholder="type here...">{{ old('title') }}</textarea>
                                    </div>
                                    <div class="card-footer rounded-web">
                                        <button type="submit"
                                            class="btn btn-warning rounded-web float-right">Upload</button>
                                    </div>
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
