<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = "delivery";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'kode_order',
        'customer',
        'terkirim_id',
        'driver',
        'created_by',
        'updated_by',
        ];
}
