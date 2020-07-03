<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\Committee;

class CreateCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('postcode');
            $table->integer('state_id');
            $table->string('contact_no');
            $table->integer('committee_position_id');
        });

        $lists = array (
            0 =>
                array (
                    'name' => 'Rashidin bin Rasip',
                    'email' => 'rashidin@kotamas.com.my',
                    'address_line_1' => 'TM Berhad Aras 3, Wisma TM Johor',
                    'address_line_2' => 'Jln Sutera 3, Taman Sentosa',
                    'city' => 'Johor Bahru',
                    'postcode' => 80150,
                    'state_id' => 1,
                    'contact_no' => '07 3336898',
                    'committee_position_id' => 1,
                ),
            1 =>
                array (
                    'name' => 'Muhammad Fierdaus bin Abdullah',
                    'email' => 'fierdaus@kotamas.com.my',
                    'address_line_1' => 'TM PCM Johor Bahru',
                    'address_line_2' => 'Jalan Abdullah Ibrahim',
                    'city' => 'Johor Bahru',
                    'postcode' => 80672,
                    'state_id' => 1,
                    'contact_no' => '07 2281264',
                    'committee_position_id' => 2,
                ),
            2 =>
                array (
                    'name' => 'Ismaiskandar bin Ismail',
                    'email' => 'ismaiskandar@kotamas.com.my',
                    'address_line_1' => 'Unit Pengurusan Keselamatan Aras 4',
                    'address_line_2' => 'Kompleks TM, Jln Kolam Air',
                    'city' => 'Alor Setar',
                    'postcode' => 5700,
                    'state_id' => 2,
                    'contact_no' => '013 2075135',
                    'committee_position_id' => 1,
                ),
            3 =>
                array (
                    'name' => 'Mohd Nazih bin Abdul Rahman',
                    'email' => 'nazih@kotamas.com.my',
                    'address_line_1' => 'No 9, Taman Kenangan',
                    'address_line_2' => 'Jalan Lelok Malik',
                    'city' => 'Kitra',
                    'postcode' => 6000,
                    'state_id' => 2,
                    'contact_no' => '013 9345655',
                    'committee_position_id' => 2,
                ),
            4 =>
                array (
                    'name' => 'Anuar bin Hassan',
                    'email' => 'anuar@kotamas.com.my',
                    'address_line_1' => 'TM Kota Bharu',
                    'address_line_2' => 'Jalan Doktor',
                    'city' => 'Kota Bharu',
                    'postcode' => 15000,
                    'state_id' => 3,
                    'contact_no' => '013 9345655',
                    'committee_position_id' => 1,
                ),
            5 =>
                array (
                    'name' => 'Che Idris bin Che Deraman',
                    'email' => 'cheidris@kotamas.com.my',
                    'address_line_1' => 'TM Kota Bharu',
                    'address_line_2' => 'Jalan Doktor',
                    'city' => 'Kota Bharu',
                    'postcode' => 15000,
                    'state_id' => 3,
                    'contact_no' => '013 9356817',
                    'committee_position_id' => 2,
                ),
            6 =>
                array (
                    'name' => 'Abd Aziz bin Ali',
                    'email' => 'aziz@kotamas.com.my',
                    'address_line_1' => 'TM Berhad',
                    'address_line_2' => 'Jalan Chan Koon Cheng',
                    'city' => 'Melaka',
                    'postcode' => 75000,
                    'state_id' => 4,
                    'contact_no' => '013 6315900',
                    'committee_position_id' => 1,
                ),
            7 =>
                array (
                    'name' => 'Mohd Esa bin Mohd Nor',
                    'email' => 'esa@kotamas.com.my',
                    'address_line_1' => 'ZBC Melaka Utara, Menara TM MITC',
                    'address_line_2' => 'Jalan Wisma Negeri',
                    'city' => 'Ayer Keroh',
                    'postcode' => 75450,
                    'state_id' => 4,
                    'contact_no' => '013 7266221',
                    'committee_position_id' => 2,
                ),
            8 =>
                array (
                    'name' => 'Arwisqarni bin Ismail',
                    'email' => 'arwis@kotamas.com.my',
                    'address_line_1' => 'Bangunan Ibu Sawat TM Seremban',
                    'address_line_2' => 'Jln Dato Hamzah',
                    'city' => 'Seremban',
                    'postcode' => 70000,
                    'state_id' => 5,
                    'contact_no' => '',
                    'committee_position_id' => 1,
                ),
            9 =>
                array (
                    'name' => 'Mohd Azwan bin Awaludin',
                    'email' => 'azza@kotamas.com.my',
                    'address_line_1' => 'TSSSB TM Point Seremban',
                    'address_line_2' => 'Jln Dato Bandar Tunggal',
                    'city' => 'Seremban',
                    'postcode' => 70000,
                    'state_id' => 5,
                    'contact_no' => '',
                    'committee_position_id' => 2,
                ),
            10 =>
                array (
                    'name' => 'Noruldin bin Mamat',
                    'email' => 'noruldin@kotamas.com.my',
                    'address_line_1' => 'Unit QA, Tingkat 1, Bangunan TM Teruntum',
                    'address_line_2' => 'Jln Tanah Putih',
                    'city' => 'Kuantan',
                    'postcode' => 25100,
                    'state_id' => 6,
                    'contact_no' => '013 9803510',
                    'committee_position_id' => 1,
                ),
            11 =>
                array (
                    'name' => 'Muhammad Rizwan bin Abd Razak',
                    'email' => 'ridzwan@kotamas.com.my',
                    'address_line_1' => 'Tkt 2, Wisma TM Mahkota',
                    'address_line_2' => 'Jln Mahkota',
                    'city' => 'Kuantan',
                    'postcode' => 25101,
                    'state_id' => 6,
                    'contact_no' => '012 9229954',
                    'committee_position_id' => 2,
                ),
            12 =>
                array (
                    'name' => 'Mohd Noor bin Mokhtar',
                    'email' => 'mohdnoor@kotamas.com.my',
                    'address_line_1' => 'TM Aras 2 Wisma TM',
                    'address_line_2' => 'Jalan Sultan Idris Shah',
                    'city' => 'Ipoh',
                    'postcode' => 30672,
                    'state_id' => 7,
                    'contact_no' => '010 5545925',
                    'committee_position_id' => 1,
                ),
            13 =>
                array (
                    'name' => 'Mohd Irtiza bin Ahmad Adli',
                    'email' => 'irtiza@kotamas.com.my',
                    'address_line_1' => 'TM Aras 2 Wisma TM',
                    'address_line_2' => 'Jalan Sultan Idris Shah',
                    'city' => 'Ipoh',
                    'postcode' => 30672,
                    'state_id' => 7,
                    'contact_no' => '019 2992678',
                    'committee_position_id' => 2,
                ),
            14 =>
                array (
                    'name' => 'Juwariah Md binti Marzuki',
                    'email' => 'juwairah@kotamas.com.my',
                    'address_line_1' => 'TM Point',
                    'address_line_2' => 'Jln Pasar Baru',
                    'city' => 'Kangar',
                    'postcode' => 1000,
                    'state_id' => 8,
                    'contact_no' => '013 4777605',
                    'committee_position_id' => 1,
                ),
            15 =>
                array (
                    'name' => 'Wan Paridah binti Aman',
                    'email' => 'wan@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia, Pengurusan Kredit',
                    'address_line_2' => 'Jalan Pasar Baru',
                    'city' => 'Kangar',
                    'postcode' => 1000,
                    'state_id' => 8,
                    'contact_no' => '013 4354537',
                    'committee_position_id' => 2,
                ),
            16 =>
                array (
                    'name' => 'Idris bin Yaakob',
                    'email' => 'idris@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia, IBS TM Balik Pulau',
                    'address_line_2' => 'Jln Balik Pulau',
                    'city' => 'Pulau Pinang',
                    'postcode' => 11000,
                    'state_id' => 9,
                    'contact_no' => '013 4397607',
                    'committee_position_id' => 1,
                ),
            17 =>
                array (
                    'name' => 'Abu Bakar bin Abdul Hamid',
                    'email' => 'abubakar@kotamas.com.my',
                    'address_line_1' => 'TM STS Ibusawat Seberang Jaya',
                    'address_line_2' => 'Jln Tun Hussein Onn',
                    'city' => 'Seberang Jaya',
                    'postcode' => 13700,
                    'state_id' => 9,
                    'contact_no' => '',
                    'committee_position_id' => 2,
                ),
            18 =>
                array (
                    'name' => 'Abd Rajak bin Othman',
                    'email' => 'razako@kotamas.com.my',
                    'address_line_1' => 'TM Point Sading Jaya',
                    'address_line_2' => 'Jln Ikan Juara',
                    'city' => 'Kota Kinabalu',
                    'postcode' => 88200,
                    'state_id' => 10,
                    'contact_no' => '013 8886969',
                    'committee_position_id' => 1,
                ),
            19 =>
                array (
                    'name' => 'Sahrimin bin Mohd Iman',
                    'email' => 'sahrimin@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia, Tkt 3, Lot 68-69',
                    'address_line_2' => 'Blok J, Business Sales',
                    'city' => 'Sadong Jaya',
                    'postcode' => 88100,
                    'state_id' => 10,
                    'contact_no' => '',
                    'committee_position_id' => 2,
                ),
            20 =>
                array (
                    'name' => 'Abdul Ghazi bin Obeng',
                    'email' => 'aghazi@kotamas.com.my',
                    'address_line_1' => 'TM SME',
                    'address_line_2' => 'Jalan batu Lintang',
                    'city' => 'Kuching',
                    'postcode' => 93200,
                    'state_id' => 11,
                    'contact_no' => '013 8108833',
                    'committee_position_id' => 1,
                ),
            21 =>
                array (
                    'name' => 'Latim bin Salleh',
                    'email' => 'latem@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia TM Consumer',
                    'address_line_2' => 'Jalan Batu Lintang',
                    'city' => 'Kuching',
                    'postcode' => 93200,
                    'state_id' => 11,
                    'contact_no' => '013 8168673',
                    'committee_position_id' => 2,
                ),
            22 =>
                array (
                    'name' => 'Zamani bin Mohd Isa',
                    'email' => 'zamani@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia CMU CSM Tkt 2',
                    'address_line_2' => 'Kompleks TM Cyberjaya',
                    'city' => 'Cyberjaya',
                    'postcode' => 63000,
                    'state_id' => 12,
                    'contact_no' => '013 3644460',
                    'committee_position_id' => 1,
                ),
            23 =>
                array (
                    'name' => 'Norhisam bin Kasim',
                    'email' => 'norhisam@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia and Sel Barat',
                    'address_line_2' => 'Wisma TM Seksyen 11',
                    'city' => 'Shah Alam',
                    'postcode' => 40100,
                    'state_id' => 12,
                    'contact_no' => '017 8896851',
                    'committee_position_id' => 2,
                ),
            24 =>
                array (
                    'name' => 'Muhammad Firas bin Mohamed Khamil',
                    'email' => 'firas@kotamas.com.my',
                    'address_line_1' => 'Telekom Malaysia Tingkat 10',
                    'address_line_2' => 'TM Damansara, Jln Damansara',
                    'city' => 'Damansara',
                    'postcode' => 60000,
                    'state_id' => 14,
                    'contact_no' => '013 6814607',
                    'committee_position_id' => 1,
                ),
            25 =>
                array (
                    'name' => 'Ismaliza binti Ishak',
                    'email' => 'ismaliza@kotamas.com.my',
                    'address_line_1' => 'Tingkat 18, Bangunan TM Bukit Mahkamah',
                    'address_line_2' => 'Jalan Raja Chulan',
                    'city' => 'Kuala Lumpur',
                    'postcode' => 50200,
                    'state_id' => 14,
                    'contact_no' => '013 3404697',
                    'committee_position_id' => 2,
                ),
        );

        foreach ($lists as $item) {
            $li = new Committee;
            $li->name = $item['name'];
            $li->email = $item['email'];
            $li->address_line_1 = $item['address_line_1'];
            $li->address_line_2 = $item['address_line_2'];
            $li->city = $item['city'];
            $li->postcode = $item['postcode'];
            $li->state_id = $item['state_id'];
            $li->contact_no = $item['contact_no'];
            $li->committee_position_id = $item['committee_position_id'];
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
        Schema::dropIfExists('committees');
    }
}
