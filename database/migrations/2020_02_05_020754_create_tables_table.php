<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurants_id'); // mendeklarasikan table ini milik resto apa
            $table->string('name'); // nama tablesnya (table couple , family, dll)
            $table->string('description'); // deskripsikan tablenya (untuk 2 orang, untuk 10 orang, dll)
            $table->timestamps();

            $table->foreign('restaurants_id')->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
