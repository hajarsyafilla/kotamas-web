@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Perutusan Khas</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li class="active">Perutusan Khas</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="managment-support-area sectpad recent-pr-two">
        <div class="container">
            <div class="row about_us_two">
                <div class="col-md-12 display-flex">
                    <div class="about_content-two text-left flex">
                        <!--<img src="http://archive.kotamas.com.my/kotamas_wp/wp-content/uploads/2017/10/Info-Korporat-Perutusan-Khas-275x300.png" align="right" />-->
                        <img src="{{asset('uploads/img-pengerusi-perutusan-khas.png')}}" align="right" />
                        <p>
                            <strong>Assalamualaikum warahmatullahiwabarakatuh.</strong><br /><br />
                            {{-- Alhamdulillah dalam kesempatan yang amat berharga ini saya dapat bersilaturrahim dengan semua anggota menerusi perutusan khas ini.<br /><br />
                            Perkembangan pesat yang berlaku di peringkat global, ditambah dengan kepantasan kemajuan teknologi maklumat, di harapkan semua anggota peka kepada perubahan.<br /><br />
                            Saya berharap agar anda dapat mengaplikasikan laman web ini dengan sebaik mungkin sepanjang tempoh pelayaran anda dalam pencarian sumber maklumat yang ingin di gapai. Semoga laman web ini membantu dalam menyampaikan maklumat yang cepat dan tepat, juga meningkatkan lagi keupayaan perkhidmatan.<br /><br />
                            Kami sedapat mungkin cuba memberikan yang terbaik untuk anda. Justeru itu, saya menaruh harapan yang tinggi agar laman web ini dapat menyumbangkan kepada keperluan masa kini.<br /><br />
                            Saya mengalu-alukan pandangan pengunjung demi memantapkan lagi laman web untuk faedah bersama. --}}

                            Alhamdulillah, syukur ke hadrat Allah S.W.T kerana limpah kurniaNya, Koperasi Telekom Malaysia Berhad (Kota Mas) kini masih berdiri teguh bagi tahun ke 97 penubuhannya.Sejajar dengan pembangunan teknologi yang semakin canggih, Kota Mas telah menaiktaraf laman sesawang Kota Mas bagi memudahkan penggunaan kepada anggotanya.<br><br>   
                            Pada tahun 2018, pendapatan Kota Mas melonjak begitu ketara kerana berkat kerjasama, kerja kuat Lembaga Pengurusan dan komitmen yang tinggi pihak operasi dalam melaksanakan perancangan yang teratur dan teliti.<br><br>
                            Pinjaman dari anggota antara penyumbang dalam pendapatan Kota Mas. Lembaga Pengurusan telah menurunkan kadar keuntungan pinjaman dari 6% sejak dari penubuhan Kota Mas kepada bawah 5% dan serendah 3% mengikut jenis pinjaman yang disediakan. Penurunan kadar keuntungan pinjaman menjadi impak yang besar kepda pendapatan koperasi. Pada tahun 2018, pihak Lembaga Pengurusan juga melancarkan Pinjaman Memperbaharui Kenderaan Bermotor tanpa caj serta Pinjaman Menunaikan Umrah.<br><br>
                            Tahun 2018, telah ditinggalkan dengan pelbagai kejayaan dan cabaran. Segala cabaran yang dihadapi dijadikan landasan untuk memperkasakan lagi gerakan koperasi.Kejayaan sesebuah koperasi juga amat bergantung kepada sejauh mana komitmen yang diberikan oleh perwakilan, anggota lembaga serta pihak pengurusan operasi dalam mentadbir dan menguruskan koperasi.<br><br>
                            Sokongan dan bantuan dari pihak Suruhanjaya Koperasi Malaysia (SKM) dialu-alukan bagi menyokong usaha murni koperasi dalam menaiktaraf sosio ekonomi anggota Kota Mas khasnya dan anggota  koperasi amnya. Juga masyarakat setempat dengan menyediakan infrastruktur serta bantuan kewangan mahupun bantuan-bantuan lain yang diperlukan mengikut kesesuaian.<br><br>
                            Saya mewakili lembaga pengurusan dan kakitangan operasi merakamkan penghargaan dan terima kasih atas sokongan dan keyakinan yang tinggi anggota Kota Mas untuk kami terus merencana dan melaksanakan usaha pembangunan di Kota Mas<br><br>
                            Semoga Allah S.W.T melindungi kita dari sifat-sifat mazmumah dan segala sifat keji yang akan memecah belah dan memporakperanda koperasi kita ini. Marilah kita bersama sama bersatu hati, tenaga dan pemikiran bagi memperkasakan Kota Mas agar menjadi koperasi yang hebat, mantap dan disegani bukan sahaja dari segi kewangan juga dari segi ukhuwah, kesepakatan dan kasih sayang.<br><br>
                            Akhir kata, terima kasih pada semua anggota Lembaga Pengurusan, kakitangan dan anggota-anggota yang terus setia memberikan segala bentuk sokongan dan sumbangan dalam memastikan Kota Mas terus maju dan cemerlang demi kepentingan bersama.
                        </p>
                        <p>Sekian, terima kasih.<br /><br />
                        <strong>ZAILAN BIN MOHD DIAH</strong><br />
                            PENGERUSI<br />
                            Koperasi Telekom Malaysia Berhad
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection