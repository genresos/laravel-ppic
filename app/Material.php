<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "materials";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'job',
        'part_no',
        'job_no',
        'model',
        'spec',
        'stock',
        'user_id',
        'created_by',
        'updated_by',
        ];
}
