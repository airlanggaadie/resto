<?php

/**
 * Model Restaurant ini berguna untuk mengatur database table restaurants
 * Model ini akan membuat relasi dengan model Tables
 * Jenis relasinya dengan model Tables adalah ONE TO MANY
 * Dengan maksud 1 resto memiliki banyak tables yang bisa dibooking
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function tables()
    {
        return $this->HasMany(Tables::class,'restaurants_id','id');
    }
}
