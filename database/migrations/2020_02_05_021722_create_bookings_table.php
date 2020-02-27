<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id'); // pemesannya berdasarkan user yang sudah login
            $table->unsignedBigInteger('tables_id'); // tables yang dipesan berdasarkan table yang sudah didaftarkan
            $table->date('check_in'); // booking untuk tanggal?
            $table->time('time'); // booking untuk jam?
            $table->text('status'); // pending/success/done
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('tables_id')->references('id')->on('tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
