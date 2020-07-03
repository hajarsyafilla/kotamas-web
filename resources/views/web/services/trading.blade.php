@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Kotamas Trading</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li class="active">Kotamas Trading</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->

<section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                   <div class="service_slider owl-carousel">
                        <div class="item">
                            <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/phone.png') }}">
                        </div>
                        <div class="item">
                            <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/laptop.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Perkhidmatan kami</h2>
                    <p>Menyediakan gadget yang terkini dengan harga dan promosi terhebat khas untuk Anggota Koperasi Telekom Malaysia Berhad .</p>
                    <head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #D5FFFF;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2a9ff4;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Produk</th>
    <th>Jenama</th>
    <th>Jenis</th>
  </tr>
  <tr>
    <td>Telefon Bimbit</td>
    <td>Samsung</td>
    <td>
        <li>Samsung A10s</li>
        <!--<li>Samsung A20s</li>
        <li>Samsung A30s (64GB)</li>
        <li>Samsung A30s (128GB)</li>
        <li>Samsung A50s (128GB)</li>
        <li>Samsung A51</li>
        <li>Samsung A71</li>
        <li>Samsung A80</li> -->
        <li>Samsung Note 10 (256GB)</li>
       <!-- <li>Samsung Note 10 Plus (256GB)</li>
        <li>Samsung Note 10 Lite</li>
        <li>Samsung S10 Lite</li>
        <li>Samsung Tab S6</li>
        <li>Samsung Tab S5e</li>
        <li>Samsung Tab A (T515)</li>
        <li>Samsung Tab A (P205)</li>
        <li>Samsung Tab A (T295)</li> -->
        <li>Samsung Tab Galaxy FOLD <b>*NEW</b></li>
       <!-- <li>Samsung Tab S20</li>
        <li>Samsung Tab S20+</li> -->
        <li><b>Samsung Tab S20 Ultra 5G</b></li>
      
    </td>
  </tr>
  
    <tr>
    <td>Telefon Bimbit</td>
    <td>Apple</td>
    <td>
      <!--  <li>Iphone 11 (64GB)</li>
        <li>Iphone 11 (128GB)</li>
        <li>Iphone 11 (256GB)</li>
        <li>Iphone 11 Pro (64GB)</li>
        <li>Iphone 11 Pro (256GB)</li>
        <li>Iphone 11 Pro (512GB)</li>
        <li>Iphone 11 Pro Max (64GB)</li>
        <li>Iphone 11 Pro Max (256GB)</li> -->
        <li>Iphone 11 Pro Max (512GB)</li>
        <li>Iphone XS (64GB)</li>
      <!--  <li>Iphone XS (256GB)</li> 
       <li>Iphone XS Max (64GB)</li>-->
        <li>Iphone XS Max (256GB)</li>
        
        
    </td>
  </tr>
     
    <tr>
    <td>Telefon Bimbit</td>
    <td>Huawei</td>
    <td>
        <li>Huawei Nova 5T</li>
      <!--  <li>Huawei P30</li> -->
        <li>Huawei P30 Pro (256GB)</li>
        <li>Huawei Y9 Prime</li>
      <!--  <li>Huawei Y9S</li>-->
        <!-- <li>Huawei Mate 30</li> -->
        <li>Huawei Mate 30 Pro</li>
        <li><b>Huawei Mate 30 Pro 5G</b></li>
        
    </td>
  </tr>
    
    <tr>
    <td>Telefon Bimbit</td>
    <td>Oppo</td>
    <td>
        <li>Oppo Reno 2</li>
        <li>Oppo A5S</li>
        <li>Oppo A9 2020 8 RAM (128GB)</li>
        <li>Oppo Realme X2 PRO</li>
        <li>Oppo Realme C2</li>
    </td>
    </tr>
    
    <tr>
    <td>Telefon Bimbit</td>
    <td>Vivo</td>
    <td>
        <li>Vivo Y11</li>
        <li>Vivo Y15</li>
        <li>Vivo S1 PRO</li>
    </td>
    </tr>
    
    
    <tr>
    <td>Telefon Bimbit</td>
    <td>Honor</td>
    <td>
        <li>Honor View 20 6 RAM (128GB)</li>
        <li>Honor View 20 8 RAM (256GB)</li>

    </td>
    </tr>
    
     <tr>
    <td>Telefon Bimbit</td>
    <td>Redmi</td>
    <td>
        <li>Redmi 7A</li>
        <li>Redmi Note 8 (64GB)</li>

    </td>
    </tr>
    
     <tr>
    <td>Telefon Bimbit</td>
    <td>Xiomi</td>
    <td>
        <li>Xiomi Mi 9t (128GB)</li>

    </td>
    </tr>
   
    
     <tr>
    <td>Laptop</td>
    <td>Acer</td>
    <td>
        <li>(Rujuk Senarai)</li>

    </td>
    </tr>
    
     <tr>
    <td>Laptop</td>
    <td>Huawei</td>
    <td>
        <li>(Rujuk Senarai)</li>

    </td>
    </tr>
    
     <tr>
    <td>Laptop</td>
    <td>Apple</td>
    <td>
        <li>(Rujuk Senarai)</li>

    </td>
    </tr>
    
</table>

</body>
                </div>
             <!--   <div class="col-md-12 s-content mt-25" style="padding-left: 5px">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Kadar Sewaan (1 Malam)</th>
                            <th scope="col">Anggota</th>
                            <th scope="col">Bukan Anggota</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Bukan Musim Puncak (Ahad-Khamis)</td>
                            <td>RM300</td>
                            <td>RM450</td>
                        </tr>
                        <tr>
                            <td>Musim Puncak (Jumaat hingga Sabtu, Cuti Sekolah, Malam sebelum Cuti Umum dan Cuti Umum)</td>
                            <td>RM350</td>
                            <td>RM500</td>
                        </tr>
                        </tbody>
                    </table>
                </div> -->
            </div>
        </div>
<br>
            <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service_slider owl-carousel">
                        <div class="item">
                            <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/logo.png') }}">
                        </div>
                        <div class="item">
                            <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/logo.png') }}">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Senarai Harga Gadget Terkini</h2>
                    <p>Untuk maklumat mengenai pakej dan harga gadget terkini, sila tekan sini.
                    </p>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span><a href="{{ action('Web\ServiceController@senaraiharga') }}">Lihat Sini</a></li>
                         <!--<li><span><i class="fa fa-angle-right"></i></span><a href="{{ action('Web\ServiceController@insurance', 'mutiara-plus') }}">Mutiara Plus Takaful Etiqa</a></li>
                      <!--  <li><span><i class="fa fa-angle-right"></i></span><a href="{{ action('Web\ServiceController@insurance', 'accident-coverage') }}">Insurans Perlindungan Kemalangan AIG</a></li>
                    -->
                    </ul>
                </div>
                <br>
                
                   <div class="col-md-8 col-sm-12 s-content">
                   <br>
                    <h2>Hubungi Kami</h2>
                    
                    <div class="w3-container">
                    <p>Hubungi kami di talian <a href="tel:0195088843">+60195088843</a> untuk pertanyaan lanjut.
                    </p>
                   
                    </div>
                </div>
                
            </div>
        </div>

    </section>

@endsection