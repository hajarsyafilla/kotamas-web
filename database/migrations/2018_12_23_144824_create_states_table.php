<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\State;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
            $table->integer('zone_id');
        });

        $lists = array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Johor',
                    'zone_id' => 4,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Kedah',
                    'zone_id' => 1,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Kelantan',
                    'zone_id' => 3,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Melaka',
                    'zone_id' => 4,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Negeri Sembilan',
                    'zone_id' => 4,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Pahang',
                    'zone_id' => 3,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Perak',
                    'zone_id' => 1,
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Perlis',
                    'zone_id' => 1,
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Pulau Pinang',
                    'zone_id' => 1,
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Sabah',
                    'zone_id' => 5,
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Sarawak',
                    'zone_id' => 5,
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Selangor',
                    'zone_id' => 2,
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Terengganu',
                    'zone_id' => 3,
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'WP Kuala Lumpur',
                    'zone_id' => 2,
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'WP Labuan',
                    'zone_id' => 5,
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'WP Putrajaya',
                    'zone_id' => 2,
                ),
        );

        foreach ($lists as $item) {
            $li = new State;
            $li->id = $item['id'];
            $li->name = $item['name'];
            $li->zone_id = $item['zone_id'];
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
        Schema::dropIfExists('states');
    }
}
