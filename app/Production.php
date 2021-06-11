<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = "data_in";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'part_no',
        'jumlah',
        'karyawan',
        'created_at',
        'created_by',
        'updated_by',
        ];
}   