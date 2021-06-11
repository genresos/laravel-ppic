<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinishGood extends Model
{
    protected $table = "finish_goods";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'part_no',
        'job_no',
        'm_need',
        'd_need',
        'stock',
        'user_id',
        'created_by',
        'updated_by',
        ];
}
