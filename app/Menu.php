<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    protected $table = 'menu';

    protected $fillable = ['restaurant_id', 'menu', 'price'];

    public function restaurant()
    {
        return $this->BelongsTo(Tables::class,'restaurant_id');
    }

    public function booking()
    {
        return $this->belongsToMany(Booking::class,'menu_bookings','menu_id','booking_id');
    }
}
