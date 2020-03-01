<?php

/**
 * Model Tables ini berguna untuk mengatur database di tables
 * Model ini akan berelasi dengan model Restaurants dan Booking
 * Jenis relasi dengan model Restaurants adalah MANY TO ONE
 *      Dengan maksud banyak Tables dimiliki oleh 1 Restaurants
 * Jenis relasi dengan model Booking adalah ONE TO MANY
 *      Dengan maksud 1 Tables bisa di pesan lebih dari 1
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tables extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'restaurants_id','name','description'
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class,'restaurants_id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class,'tables_id','id');
    }
}