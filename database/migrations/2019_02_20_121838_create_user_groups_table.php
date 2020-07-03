<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Model\User;
use Model\UserGroup;

class CreateUserGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
            $table->timestamps();
        });

        UserGroup::insert([
            ['id' => 1, 'name' => 'Administrator'],
            ['id' => 2, 'name' => 'Editor']
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->integer('user_group_id')->default(2);
        });

        User::whereIn('id', [1,2])->update(['user_group_id' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_group_id');
        });

        Schema::dropIfExists('user_groups');
    }
}
