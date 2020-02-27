<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    protected $table = 'menu';

    protected $fillable = ['id_restaurant', 'menu', 'price'];

    public function restaurant()
    {
        return $this->BelongsTo(Tables::class,'id_restaurant');
    }
}
