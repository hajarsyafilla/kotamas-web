<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\Personnel;

class CreatePersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('contact_no');
            $table->string('image');
            $table->string('personnel_department_id');
        });

        $lists = array (
            0 =>
                array (
                    'name' => 'Abd Razak Bin Yatim',
                    'email' => 'razak@kotamas.com.my',
                    'contact_no' => '013 378 1922',
                    'personnel_department_id' => 1,
                    'image' => 'razak-1-238x300.png',
                ),
            1 =>
                array (
                    'name' => 'Farasnini Binti Haniffa',
                    'email' => 'farah@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 1,
                    'image' => 'Fara-1-238x300.png',
                ),
            2 =>
                array (
                    'name' => 'Nor Aslinda Binti Mohd Salleh',
                    'email' => 'aslinda@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 1,
                    'image' => 'Aslinda-238x300.png',
                ),
            3 =>
                array (
                    'name' => 'Siti Nuraisha Binti Abd Rahman',
                    'email' => 'sitinuraisha@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 1,
                    'image' => 'Aisha-1-238x300.png',
                ),
            4 =>
                array (
                    'name' => 'Rahmis Bin Zainal',
                    'email' => 'rahmis@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 1,
                    'image' => 'Rahmis-2-238x300.png',
                ),
            5 =>
                array (
                    'name' => 'Norhashimah Binti Abdul Mutalib',
                    'email' => 'shima@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 1,
                    'image' => 'Shimah-1-238x300.png',
                ),
            6 =>
                array (
                    'name' => 'Yuslinda Binti Yusoff',
                    'email' => 'linda@kotamas.com.my',
                    'contact_no' => '013 948 1922',
                    'personnel_department_id' => 2,
                    'image' => 'Yuslinda-1-238x300.png',
                ),
            7 =>
                array (
                    'name' => 'Hasnida Binti Hashim',
                    'email' => 'hasnida@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 2,
                    'image' => 'ida-238x300.png',
                ),
            8 =>
                array (
                    'name' => 'Rohaini Binti Md Dom',
                    'email' => 'rohaini@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 2,
                    'image' => 'Anne-238x300.png',
                ),
            9 =>
                array (
                    'name' => 'Salwaniyah Binti Saini',
                    'email' => 'wani@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 2,
                    'image' => 'Wani-1-238x300.png',
                ),
            10 =>
                array (
                    'name' => 'Fazlina Binti Haniffa',
                    'email' => 'fazlina@kotamas.com.my',
                    'contact_no' => '013 835 1922',
                    'personnel_department_id' => 3,
                    'image' => 'Ina-1-238x300.png',
                ),
            11 =>
                array (
                    'name' => 'Siti Fadzillah Binti Ahmad CB',
                    'email' => 'dilla@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 3,
                    'image' => 'Dilla-1-238x300.png',
                ),
            12 =>
                array (
                    'name' => 'Nor Amalina Binti Nordin',
                    'email' => 'amalina@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 3,
                    'image' => 'Nolly-2-238x300.png',
                ),
            13 =>
                array (
                    'name' => 'Najwa Salsabila Binti Nosarimy',
                    'email' => 'najwa@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 3,
                    'image' => 'Wawa-238x300.png',
                ),
            14 =>
                array (
                    'name' => 'Wan Nur Syuhada',
                    'email' => 'syuhada@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 3,
                    'image' => 'wan-238x300.png',
                ),
            15 =>
                array (
                    'name' => 'Nur Amira Binti Abdul Razak',
                    'email' => 'amira@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 3,
                    'image' => 'Amira-238x300.png',
                ),
            16 =>
                array (
                    'name' => 'Faza Hazirah Binti Mohd Shah',
                    'email' => 'fazahazirah@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 3,
                    'image' => 'Faza-238x300.png',
                ),
            17 =>
                array (
                    'name' => 'Ahmad Nizam Bin Ismail',
                    'email' => 'ahmadnizam@kotamas.com.my',
                    'contact_no' => '019 720 1922',
                    'personnel_department_id' => 4,
                    'image' => 'Ahmad-238x300.png',
                ),
            18 =>
                array (
                    'name' => 'Che Nurul Hayatul Saqdiah',
                    'email' => 'chenurul@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 4,
                    'image' => 'Nurul-238x300.png',
                ),
            19 =>
                array (
                    'name' => 'Siti Aminah Binti Abd Latif',
                    'email' => 'sitiaminah@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 4,
                    'image' => 'Siti-238x300.png',
                ),
            20 =>
                array (
                    'name' => 'Fazila Binti Rasul',
                    'email' => 'fazila@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 4,
                    'image' => 'Fazila-238x300.png',
                ),
            21 =>
                array (
                    'name' => 'Muhamad Imran Bin Mohd Zubir',
                    'email' => 'imran@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 4,
                    'image' => 'Imran-238x300.png',
                ),
            22 =>
                array (
                    'name' => 'Nurul Husna Binti Abdul Razak',
                    'email' => 'husna@kotamas.com.my',
                    'contact_no' => '013 923 1922',
                    'personnel_department_id' => 5,
                    'image' => 'husna-1-238x300.png',
                ),
            23 =>
                array (
                    'name' => 'Nadiatul Hikma Binti Yaacob',
                    'email' => 'nadia@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 5,
                    'image' => 'nadia-238x300.png',
                ),
            24 =>
                array (
                    'name' => 'Muhammad Najib Bin Abdul Halim',
                    'email' => 'najib@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 5,
                    'image' => 'Najib-1-238x300.png',
                ),
            25 =>
                array (
                    'name' => 'Nurul Ain Binti Latif',
                    'email' => 'ain@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 5,
                    'image' => 'Ain-1-238x300.png',
                ),
            26 =>
                array (
                    'name' => 'Siti Munirah Binti Sulaiman',
                    'email' => 'munirah@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 6,
                    'image' => 'pn-munirah.jpg',
                ),
            27 =>
                array (
                    'name' => 'Nur Syamsinar Binti Azmi',
                    'email' => 'syamsinar@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 6,
                    'image' => 'pn-syinar.jpg',
                ),
            28 =>
                array (
                    'name' => 'Nurul Nadia Binti Abd Kudus',
                    'email' => 'nadiakudus@kotamas.com.my',
                    'contact_no' => '013 837 1922',
                    'personnel_department_id' => 7,
                    'image' => 'nurul-nadia-236x300.png',
                ),
            29 =>
                array (
                    'name' => 'Fatin Syafiah Amirah Binti Mohd Fizi',
                    'email' => 'fatinamirah@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 8,
                    'image' => 'Fatin-1-238x300.png',
                ),
            30 =>
                array (
                    'name' => 'Muhammad Farhan Bin Ramli',
                    'email' => 'farhan@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 8,
                    'image' => 'paan-1-238x300.png',
                ),
            31 =>
                array (
                    'name' => 'Wan Masitah Binti Abd Rahman',
                    'email' => 'ayu@kotamas.com.my',
                    'contact_no' => '',
                    'personnel_department_id' => 8,
                    'image' => 'Ayu-1-238x300.png',
                ),
            32 =>
                array (
                    'name' => 'Nor Hayati Binti Md Nor',
                    'email' => 'kotamastt@gmail.com',
                    'contact_no' => '',
                    'personnel_department_id' => 8,
                    'image' => 'yati-238x300.png',
                ),
            33 =>
                array (
                    'name' => 'Saiful Nizam Bin Johari',
                    'email' => 'saifulnizam@kotamas.com.my',
                    'contact_no' => '03 2241 1888',
                    'personnel_department_id' => 9,
                    'image' => 'en-ijam.jpg',
                ),
        );

        foreach ($lists as $item) {
            $li = new Personnel;
            $li->name = $item['name'];
            $li->email = $item['email'];
            $li->contact_no = $item['contact_no'];
            $li->image = $item['image'];
            $li->personnel_department_id = $item['personnel_department_id'];
            $li->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
}
