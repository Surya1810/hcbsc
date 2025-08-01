@extends('frontend.layouts.app')

@section('title')
    Tentang kami
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container pb-3">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-10 mt-5">
                    <div class="card glass-card rounded-4">
                        <div class="card-body">
                            <h1 class="text-center text-stroke-hcb"><strong>Tentang HCBSC</strong></h1>

                            <h3 class="text-black mt-3"><strong>Harley Club Bandoeng Shooting Club (HCBSC)</strong></h3>
                            <p class="text-black mt-3">
                                <strong>HCBSC</strong> atau <strong>Harley Club Bandoeng Shooting Club</strong> adalah
                                komunitas menembak resmi dari <strong>Harley
                                    Club Bandung (HCB)</strong> yang menggabungkan semangat persaudaraan, ketepatan, dan
                                kedisiplinan
                                dalam olahraga menembak. Berdiri dari semangat kebersamaan para anggota HCB, HCBSC hadir
                                sebagai wadah bagi pecinta otomotif dan olahraga menembak yang ingin berkembang secara
                                profesional dan berprestasi.
                                <br><br>
                                Kami bukan sekadar komunitas, tetapi sebuah <strong>organisasi pembinaan olahraga
                                    menembak</strong> yang
                                aktif, terstruktur, dan berorientasi pada prestasi. Di bawah naungan dan dukungan dari HCB
                                serta terhubung langsung dengan <strong>PB Perbakin</strong>, kami menjembatani minat
                                anggota dalam dunia
                                menembak menuju level <strong>daerah, nasional, hingga internasional</strong>.
                            </p>

                            <h3><strong>Visi</strong></h3>
                            <p>Menjadi komunitas menembak yang profesional, berprestasi, dan berkontribusi aktif dalam
                                pengembangan olahraga menembak Indonesia.</p>

                            <h3><strong>Misi</strong></h3>
                            <ul>
                                <li>Membina dan mengembangkan kemampuan menembak anggota Harley Club Bandung.</li>
                                <li>Menyelenggarakan latihan, lomba internal, dan mengikuti kejuaraan resmi di berbagai
                                    tingkat.</li>
                                <li>Mengarahkan anggota memahami dan mematuhi peraturan olahraga menembak yang berlaku.</li>
                                <li>Menghasilkan atlet berkaliber nasional dan internasional melalui pembinaan intensif.
                                </li>
                                <li>Menjalin kerja sama strategis dengan Perbakin serta menjaga kelestarian alam dalam
                                    setiap kegiatan berburu.</li>
                                <li>Memberikan penghargaan dan tanda kemahiran sebagai bentuk motivasi dan pencapaian
                                    anggota.</li>
                            </ul>

                            <h3><strong>Komitmen</strong></h3>
                            <p>Kami berkomitmen untuk menumbuhkan budaya menembak yang aman, sportif, dan berprestasi.
                                Dengan sistem administrasi profesional, manajemen keuangan yang transparan, dan kepengurusan
                                yang solid, HCBSC terus berkembang menjadi contoh komunitas menembak modern yang selaras
                                dengan nilai-nilai luhur olahraga dan persaudaraan.
                                <br><br>
                                Bergabunglah bersama kami — <strong>temukan presisi, semangat, dan persaudaraan dalam setiap
                                    bidikan</strong>.

                            <h3><strong>Legalitas</strong></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>SKEP PERBAKIN</td>
                                        <td>:</td>
                                        <td>76/SK/PKB/IX/2024</td>
                                    </tr>
                                    <tr>
                                        <td>SKEP MENKUMHAM</td>
                                        <td>:</td>
                                        <td>AHU-0012475.AH.01.07.TAHUN 2018</td>
                                    </tr>
                                    <tr>
                                        <td>Notaris</td>
                                        <td>:</td>
                                        <td>26 September 2018 No.6</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex align-items-center justify-content-center" style="min-height: 100svh; background-color: #212121;">
        <div class="container">
            <div class="row align-items-center text-white">
                <!-- Kolom Gambar Logo -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <img src="{{ asset('assets/logo/hcb_main.webp') }}" alt="Logo HCBSC" class="img-fluid mt-4"
                        style="max-height: 300px;">
                    <img src="{{ asset('assets/logo/hcb_bw.webp') }}" alt="Logo HCBSC" class="img-fluid mt-4"
                        style="max-height: 300px;">
                </div>

                <!-- Kolom Penjelasan Filosofi -->
                <div class="col-12 col-md-8 py-4">
                    <h3 class="fw-bold text-white">Filosofi Logo</h3>
                    <p>
                        Logo HCB Shooting Club ini menggunakan dasar bentuk & tulisan dari logo HCB utama agar tidak
                        menghilangkan unsur dari logo HCB itu sendiri, selain itu style logo retro dipilih agar sesuai
                        dengan konsep utamanya yang sudah ada dari 1960. ditambah beberapa visualisasi lain.
                    </p>
                    <h6 class="fw-bold text-white">Ribbon/Pita</h6>
                    <p>
                        Ribbon sering digunakan dalam medali dan penghargaan. Dalam logo, ini merepresentasikan penghormatan
                        terhadap nilai, pencapaian, dan dedikasi anggota. Menandakan bahwa klub menjunjung tinggi
                        integritas, keberanian, dan prestasi. <br>
                        Selain itu bentuk ribbon yang melengkung (seolah-olah seperti memeluk) menggambarkan ikatan
                        persaudaraan dan solidaritas antar anggota yang merupakan simbol dari keterikatan dan kekompakan
                        dalam satu tujuan bersama.
                    </p>
                    <h6 class="fw-bold text-white">3 Bintang</h6>
                    <p>
                        Adanya 3 bintang dalam logo ini merepresentasikan dari tagline club HCBSC yang berbunyi "Silih Asah,
                        Silih Asih, Silih Asuh" yang dimana posisi dari bintang kedua lebih tinggi dari posisi bintang
                        lainnya diartikan bahwa Silih Asih (Saling Peduli) merupakan hal yang diutamakan dalam klub ini.
                    </p>
                    <h6 class="fw-bold text-white">Bendera Indonesia</h6>
                    <p>
                        Posisi Bendera Indonesia ini berapa di dalam bentuk utama dari logo ini yang mencerminkan semangat
                        kebangsaan dan rasa cinta tanah air. Ini menunjukkan bahwa setiap kegiatan atau identitas organisasi
                        tetap berpijak pada nilai-nilai kebangsaan dan mendukung persatuan Indonesia. <br>
                        Kehadiran bendera juga bisa dimaknai sebagai bentuk komitmen terhadap nilai-nilai Pancasila, hukum,
                        dan ketertiban negara. Dalam konteks klub motor atau shooting club ini penting untuk menekankan
                        bahwa aktivitas kami tetap dalam koridor legal dan etis.
                    </p>
                    <h6 class="fw-bold text-white">Senapan & Handgun</h6>
                    <p>
                        Senapan silang menggambarkan kegiatan utama dari klub ini. Menegaskan identitas klub sebagai
                        komunitas yang tidak hanya berkendara, tetapi juga menembak reaksi dan berburu.
                    </p>
                    <h6 class="fw-bold text-white">Target/bidikan (bullseye)</h6>
                    <p>
                        Melambangkan ketepatan, fokus, dan pengendalian diri nilai utama dalam menembak yang mengasah
                        keterampilan, konsentrasi, dan keberanian.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="heroes">
        <div class="container py-5">
            <div class="row justify-content-center">
                {{-- FOTO --}}
                {{-- <div class="col-6 col-sm-4 col-md-2">
                    <div class="card glass-card-dark rounded-4">
                        <!-- Rasio 4:3 untuk foto -->
                        <img src="{{ asset('assets/photo/profil_firkie.jpg') }}"
                            class="object-fit-cover w-100 h-100 rounded-4" alt="Foto Pengurus">

                        <!-- Nama di bawah foto -->
                        <div class="p-3 text-hcb text-center fw-semibold">
                            Nama Pengurus
                            <br>
                            <i>Jabatan</i>
                        </div>
                    </div>
                </div> --}}
                <h1 class="text-center text-stroke-hcb"><strong>Susunan Pengurus</strong></h1>
                <div class="col-12 col-md-10">
                    <div class="card glass-card rounded-4">
                        <div class="card-body">
                            <h4 class="text-black mt-3"><strong>Pelindung</strong></h4>
                            <ul>
                                <li>Komjen Pol.Prof.DR.Rudy Heriyanto A.N.,SH.MH.MBA.</li>
                                <li>Brigjen TNI (MAR) Bambang S.,SH,M.Tr.(Han)</li>
                                <li>Marsekal Pertama TNI Jemmyn Trisonjaya,M.Tr.(Han)</li>
                                <li>Kol.Kav.Sugi Mulyanto</li>
                                <li>Ketua Umum Perbakin Cabang Kota Bandung</li>
                            </ul>

                            <h4 class="text-black mt-3"><strong>Pembina</strong></h4>
                            <ul>
                                <li>Brigjen TNI Yanuar Adil</li>
                                <li>Muhammad Tauhid Habibie</li>
                                <li>Moch. Moechlies H.</li>
                                <li>Letkol Kav. Gan Gan Rusgandara, S.Hub.INT</li>
                            </ul>

                            <h4 class="text-black mt-3"><strong>Penasehat</strong></h4>
                            <ul>
                                <li>H. Tatang S.</li>
                                <li>DR. Dadang Abdulrochman</li>
                                <li>Drs. M. Hani Setiadji</li>
                                <li>Hassan Muda Nasution, SE.</li>
                            </ul>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Ketua</strong></td>
                                        <td>:</td>
                                        <td>H. Cheppy Haryanto</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Wakil Ketua</strong></td>
                                        <td>:</td>
                                        <td>Rusdi Raisa,ST.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sekretaris</strong></td>
                                        <td>:</td>
                                        <td>Hj. Irmania, ST.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Wakil Sekretaris</strong></td>
                                        <td>:</td>
                                        <td>Sufi Aprianti</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bendahara</strong></td>
                                        <td>:</td>
                                        <td>Uci Ahmad Sanusi</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Wakil Bendahara</strong></td>
                                        <td>:</td>
                                        <td>Firkie Apriliza Ramadhani,SE.MM.MH.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ketua Bidang Berburu</strong></td>
                                        <td>:</td>
                                        <td>H. Dedi</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ketua Bidang Tembak Reaksi</strong></td>
                                        <td>:</td>
                                        <td>H. Sigit Yunanto, S.Pi</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ketua Bidang Humas</strong></td>
                                        <td>:</td>
                                        <td>Edy Suhendi Hidayat</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ketua Bidang Organisasi</strong></td>
                                        <td>:</td>
                                        <td>Putri Azzahra Haryanto</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ketua Bidang Hukum & Etika</strong></td>
                                        <td>:</td>
                                        <td>Hardi Kusumanegara, SH.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ketua Bidang Disiplin & Pembinaan</strong></td>
                                        <td>:</td>
                                        <td>
                                            <ul>
                                                <li>Hadidi Firdaus</li>
                                                <li>Sudarno</li>
                                                <li>Rudhiarto</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Komisi Kepelatihan</strong></td>
                                        <td>:</td>
                                        <td>Suratman</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Komisi Wasit & Juri</strong></td>
                                        <td>:</td>
                                        <td>Azhari</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
