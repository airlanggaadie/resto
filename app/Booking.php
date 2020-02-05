<?php
/**
 * Model Booking berguna untuk mengatur database table bookings
 * Model ini mempunyai relasi dengan users dan tables
 * Jenis relasi dengan model Users adalah MANY TO ONE
 *      Dengan maksud banyak booking bisa dilakukan oleh 1 user
 * Jenis relasi dengan model Tables adalah MANY TO ONE
 *      Dengan maksud banyak booking bisa memesan 1 tables
 * Jadi dalam 1 booking bisa dapet data users dan data tables
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function tables()
    {
        return $this->belongsTo(TAbles::class,'tables_id');
    }
}
