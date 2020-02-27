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
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    
    protected $table = 'bookings';

    protected $fillable = [
        'users_id','tables_id','check_in','time','menu_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function table()
    {
        return $this->belongsTo(Tables::class,'tables_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }
}
