<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->timestamps();
        });

        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('file_name');
            $table->string('hash_name');
            $table->integer('size');
            $table->string('mime_type');
            $table->integer('download_category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downloads');
        Schema::dropIfExists('download_categories');
    }
}
