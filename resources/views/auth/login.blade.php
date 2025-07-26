@extends('frontend.layouts.app')

@section('title')
    Login
@endsection

@push('css')
@endpush

@section('content')
    <div class="heroes_main">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-center" style="height: 100svh;">
                <div class="col-10 col-lg-3">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('assets/logo/hcb_main.webp') }}" alt="HCBSC_logo" width="100px">
                    </div>
                    <div class="card login_card rounded-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="my-3">
                                    <label for="email"
                                        class="form-label col-form-label-sm m-0 text-white">{{ __('Alamat email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="password"
                                        class="form-label col-form-label-sm m-0 text-white">{{ __('Kata sandi') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-warning rounded-5"
                                        style="font-weight: 700;font-size: 18px">
                                        {{ __('Masuk') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
