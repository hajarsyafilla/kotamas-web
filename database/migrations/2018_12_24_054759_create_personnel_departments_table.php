<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\PersonnelDepartment;

class CreatePersonnelDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_departments', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
        });

        $lists = array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Administration',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Loan',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Account',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Insurance',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Credit Control',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Ar-Rahnu Pandan Indah',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Ar-Rahnu Pantai Hillpark',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Kota Mas Travel & Tours',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Menara Telekom',
                ),
        );

        foreach ($lists as $item) {
            $li = new PersonnelDepartment;
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
        Schema::dropIfExists('personnel_departments');
    }
}
