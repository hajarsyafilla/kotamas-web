<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\CommitteePosition;

class CreateCommitteePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_positions', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
        });

        $lists = array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Pengerusi',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Setiausaha',
                ),
        );

        foreach ($lists as $item) {
            $li = new CommitteePosition;
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
        Schema::dropIfExists('committee_positions');
    }
}
