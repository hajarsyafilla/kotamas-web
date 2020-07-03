@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Mutiara Plus Takaful</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li>Insurans</li>
                    <li class="active">Mutiara Plus Takaful</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="">
                        <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/etiqa-logo.jpg') }}">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Mutiara Plus dari Etiqa</h2>
                    <p>Insurans Berkelompok Mutiara Plus Takaful Etiqa Skim Perlindungan Hayat Koperasi Telekom Malaysia Berhad telah menjalinkan kerjasama dengan Etiqa Takaful Berhad untuk mewujudkan satu pelan perlindungan yang istimewa khusus untuk anggota koperasi yang mana pelan Takaful Mutiara Plus di perkenalkan di pasaran yang merangkumi faeadah serta kebaikan yang bakal dinikmati seperti berikut:
                    </p>
                    <ol class="custom-list">
                        <li><span>Perlindungan 36 jenis penyakit kritikal</span></li>
                        <li><span>Elaun harian kemasukan ke wad/hospital bagi tempoh minima 6 jam.</span></li>
                        <li><span>Perbelanjaan pengebumian RM2,000 untuk ahli dan RM1,000 untuk pasangan serta RM500 (anak-anak-maksimum 3 orang)</span></li>
                        <li><span>Perlindungan merangkumi kematian dan keilatan kekal menyeluruh berpunca daripada penyakit dan kemalangan.</span></li>
                        <li><span>Perlindungan keilatan separa kekal mengikut skala yang ditetapkan.</span></li>
                        <li><span>Pasangan dan anak-anak boleh menyertainya. Semua manfaat di atas dapat dinikmati dengan sumbangan serendah RM40.00 sebulan Pelan ini juga ditawarkan kepada anggota selaras denganPerlaksanaan Pembiayaan Syariah yang diperkenalkan oleh pihak Koperasi.</span></li>
                    </ol>
                </div>
            </div>
        </div>

    </section>
    <section class="row services-wd-area services-wd services-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 s-content">
                    <h2>Penyakit-Penyakit Kritikal yang Dilindungi</h2>
                </div>
                <div class="col-md-6 col-sm-6 s-content">
                    <ol class="custom-list">
                        <li><span>Serangan Jantung</span></li>
                        <li><span>Strok</span></li>
                        <li><span>Kanser</span></li>
                        <li><span>Penyakit Arteri Koronari</span></li>
                        <li><span>Pembedahan Aorta</span></li>
                        <li><span>Pemindahan Organ Utama</span></li>
                        <li><span>Koma</span></li>
                        <li><span>Lumpuh/Paraplegia</span></li>
                        <li><span>Sklerosis Berbilang</span></li>
                        <li><span>Kegagalan Buah Pinggang (Renal)</span></li>
                        <li><span>Hepatitis Virus Fulminan</span></li>
                        <li><span>Hipertensi Arteri Pulmonari Primer</span></li>
                        <li><span>Hilang Penglihatan</span></li>
                        <li><span>Hilang Pendengaran</span></li>
                        <li><span>Hilang Pertuturan</span></li>
                        <li><span>Luka Terbakar Teruk</span></li>
                        <li><span>Trauma Kepala Utama</span></li>
                        <li><span>Penyakit Terminal</span></li>
                        <li><span>Tumor Otak Benigna</span></li>
                        <li><span>Penyakit Parkinson</span></li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-6 s-content">
                    <ol class="custom-list">
                        <li><span>Penyakit Paru-Paru Kronik</span></li>
                        <li><span>Penyakit Hati Kronik</span></li>
                        <li><span>Penyakit Neuron Motor</span></li>
                        <li><span>Penyakit Alzheimer</span></li>
                        <li><span>Angioplasti dan Rawatan Invasif lain bagi Penyakit Arteri Koronari</span></li>
                        <li><span>Hilang Keupayaan Diri/Bebas</span></li>
                        <li><span>Radang Otak (Ensefalitis)</span></li>
                        <li><span>Poliomielitis</span></li>
                        <li><span>Rawatan Laser Koronari</span></li>
                        <li><span>Distrofi Otot</span></li>
                        <li><span>Atherectomi Koronari</span></li>
                        <li><span>Anaemia Aplastik</span></li>
                        <li><span>Meningitis Bakteri</span></li>
                        <li><span>Penyakit Paru-Paru Peringkat Akhir</span></li>
                        <li><span>Penyakit Arteri Koronari yang Serius</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 s-content">
                    <h2><small><strong>BORANG TUNTUTAN RAWATAN HOSPITAL (SEC. A)</strong></small></h2>
                    <p>Anggota perlu mengisi borang tuntutan sendiri sekiranya anggota di wadkan KURANG daripada 25 hari. Sila sertakan dokumen dibawah:</p>
                    <ol class="custom-list">
                        <li><span>Salinan Discharge summary (dinyatakan sakit apa)</span></li>
                        <li><span>Salinan bil hospital (jika ada)</span></li>
                        <li><span>Salinan kad pengenalan</span></li>
                        <li><span>Salinan dokumen yang berkaitan</span></li>
                    </ol>
                    <p>Borang tuntutan yang telah lengkap hendaklah dipos atau dihantar melalui serahan tangan ke Kota Mas. Pastikan Borang tuntutan yang dihantar adalah yang original bertandatangan.</p>
                    <p><a href="{{ asset('uploads/BORANG-TUNTUTAN-INSURANS-SECTION-A.pdf') }}" target="_blank"><i class="fa fa-download"></i> Borang Tuntutan Rawatan Hospital Sec. A</a></p>
                </div>
                <div class="col-md-6 col-sm-12 s-content">
                    <h2><small><strong>BORANG TUNTUTAN RAWATAN HOSPITAL (SEC. B)</strong></small></h2>
                    <p>Anggota perlu menyediakan dua (2) borang tuntutan iaitu Borang (SEC.A) dan Borang (SEC. B) sekiranya anggota di wadkan MELEBIHI daripada 25 hari. <br /><br /><strong>Borang Tuntutan Rawatan Hospital (SEC. B) perlulah mendapatkan pengesahan daripada Doktor yang merawat.</strong> <br /><br />Sila sertakan dokumen dibawah:</p>
                    <ol class="custom-list">
                        <li><span>Salinan Discharge summary (dinyatakan sakit apa)</span></li>
                        <li><span>Salinan bil hospital (jika ada)</span></li>
                        <li><span>Salinan kad pengenalan</span></li>
                        <li><span>Salinan dokumen yang berkaitan</span></li>
                    </ol>
                    <p>Borang tuntutan yang telah lengkap hendaklah dipos atau dihantar melalui serahan tangan ke Pejabat Kota Mas. Pastikan Borang tuntutan yang dihantar adalah yang original bertandatangan.</p>
                    <p><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-HOSPITAL-SEC.-B.pdf') }}" target="_blank"><i class="fa fa-download"></i> Borang Tuntutan Rawatan Hospital Sec. B</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="row services-wd-area services-wd services-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 s-content">
                    <h2><small><strong>BORANG TUNTUTAN RAWATAN PENYAKIT KRITIKAL</strong></small></h2>
                    <p>Borang tuntutan yang telah lengkap hendaklah dipos atau dihantar melalui serahan tangan ke Pejabat Kota Mas.
                        Pastikan Borang Tuntutan Rawatan Penyakit Kritikal A dihantar bersama-sama Borang Tuntutan Rawatan Penyakit Kritikal (pilihan) dan original bertandatangan.</p>
                    <p>Sebelum muat turun borang sila hubungi pegawai insurans bagi mendapatkan pengesahan lebih lanjut di talian 03 – 4042 7766.</p>
                    <p><br /><i class="fa fa-download"></i> <strong>Muat Turun Borang</strong></p>
                    <ol class="custom-list">
                        <li><span><a href="{{ asset('uploads/') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal A</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-PENYAKIT-KRITIKAL-STROKE.pdf') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal – Stroke</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-PENYAKIT-KRITIKAL-OTHERS.pdf') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal – Others</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-PENYAKIT-KRITIKAL-END-STAGE-RENAL-FAILURE.pdf') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal – Kidney Failure</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-PENYAKIT-KRITIKAL-HEART.pdf') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal – Heart</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-PENYAKIT-KRITIKAL-HEART-ATTACK.pdf') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal – Heart Attack</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-PENYAKIT-KRITIKAL-CANCER.pdf') }}" target="_blank">Borang Tuntutan Rawatan Penyakit Kritikal – Cancer</a></span></li>
                        <li><span><a href="{{ asset('uploads/36-JENIS-PENYAKIT-KRITIKAL.pdf') }}" target="_blank">Jadual 36 Jenis Penyakit Kritikal</a></span></li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-12 s-content">
                    <h2><small><strong>BORANG TUNTUTAN RAWATAN KEILATAN KEKAL</strong></small></h2>
                    <p>Borang tuntutan yang lengkap perlulah dipos atau dihantar melalui
                        serahan tangan ke Pejabat Kota Mas. Pastikan Borang tuntutan yang dihantar
                        adalah yang original bertandatangan.</p>
                    <p><br /><i class="fa fa-download"></i> <strong>Muat Turun Borang</strong></p>
                    <ol class="custom-list">
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-INSURANS-SECTION-A.pdf') }}" target="_blank">Borang Tuntutan Rawatan Keilatan Kekal A</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-KEILATAN-KEKAL-B.pdf') }}" target="_blank">Borang Tuntutan Rawatan Keilatan Kekal B</a></span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 s-content">
                    <h2><small><strong>BORANG TUNTUTAN RAWATAN KEILATAN SEPARA KEKAL</strong></small></h2>
                    <p>Borang tuntutan yang telah lengkap hendaklah dipos atau dihantar melalui serahan tangan ke Pejabat Kota Mas. Pastikan Borang tuntutan yang dihantar adalah yang original bertandatangan.</p>
                    <p><br /><i class="fa fa-download"></i> <strong>Muat Turun Borang</strong></p>
                    <ol class="custom-list">
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-INSURANS-SECTION-A.pdf') }}" target="_blank">Borang Tuntutan Rawatan Keilatan Separa Kekal A</a></span></li>
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-RAWATAN-KEILATAN-SEPARA-KEKAL-B.pdf') }}" target="_blank">Borang Tuntutan Rawatan Keilatan Separa Kekal B</a></span></li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-12 s-content">
                    <h2><small><strong>BORANG CARUMAN ETIQA</strong></small></h2>
                    <p>Sebelum muat turun borang sila hubungi pegawai insurans bagi
                        mendapatkan pengesahan lebih lanjut di talian 03 – 4042 7766.</p>
                    <p><a href="{{ asset('uploads/BORANG-CARUMAN-ETIQA.pdf') }}" target="_blank"><i class="fa fa-download"></i> Borang Caruman Etiqa</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-baner sectpad info-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-content">
                    <div class="media">
                        <div class="media-body texts">
                            <h2>Pertanyaan?</h2>
                            <p>Anda boleh menghubungi pegawai insurans kami di talian <strong>03 4042 7766</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="baner-btn slide-Link">
                        <a class="btn btn-primary btn-h" style="width: 200px" href="{{ action('Web\HomeController@contactUs') }}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection