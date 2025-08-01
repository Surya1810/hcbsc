@extends('frontend.layouts.app')

@section('title')
    Hubungi kami
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <section class="address py-5 mx-2 mx-lg-0">
                    <h1 class="text-center text-stroke-hcb"><strong>Hubungi Kami</strong></h1>
                    <div class="container container-gap-lg card-address" style="background-color: #9a0000">
                        <div class="row justify-content-center">
                            <div class="header col-lg-6 col-md-6 col-sm-12">
                                <div class="text-header-address">
                                    <h3>Sekretariat</h3>
                                    <p>Jika Anda memiliki pertanyaan lainnya, jangan ragu untuk menghubungi kami</p>
                                </div>
                                <div class="text-address">
                                    <p class="text-white"><strong>HCB Shooting Club</strong><br>
                                        Inhoftank Jati Permai, Ruko 72, Kota Bandung,
                                        Jawa Barat 40243</p>
                                </div>
                                <div class="text-footer-address">
                                    <div class="list-icon">
                                        <h3 class="text-hcb">Hotline</h3>
                                        <div class="text-icon text-white"><i
                                                class="small-icon fa-solid fa-phone text-hcb"></i>+62 821 2600 0126
                                        </div>
                                    </div>
                                    <div class="list-icon">
                                        <h3 class="text-hcb">Email</h3>
                                        <div class="text-icon text-white"><i
                                                class="small-icon fa-solid fa-envelope text-hcb"></i>hcbshootingclub@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 gmap">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5002.225200849921!2d107.59974607594114!3d-6.94726249305296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e89492980df9%3A0xcc47d9251368cb2a!2sJl.%20Inhoftank%20No.234%2C%20Kb.%20Lega%2C%20Kec.%20Bojongloa%20Kidul%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040235!5e1!3m2!1sid!2sid!4v1753442489164!5m2!1sid!2sid"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
