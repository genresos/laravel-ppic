<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    protected $table = "laporan";
    protected $primaryKey = "id";

    protected $fillable = [
        
        'id',
        'jenis_laporan',
        'created_by',
        ];
}
