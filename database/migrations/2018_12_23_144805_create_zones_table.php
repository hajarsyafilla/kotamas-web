<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\Zone;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
        });

        $lists = array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Utara',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Tengah',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Timur',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Selatan',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Sabah & Sarawak',
                ),
        );

        foreach ($lists as $item) {
            $li = new Zone;
            $li->id = $item['id'];
            $li->name = $item['name'];
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
        Schema::dropIfExists('zones');
    }
}
