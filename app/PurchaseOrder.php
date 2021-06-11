<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = "p_order";
    protected $primaryKey = "id";

    protected $fillable = [
        
        'id',
        'kode_order',
        'type_order',
        'type_order_id',
        'customer',
        'stock_id',
        'terkirim',
        'status',
        'created_at',
        'created_by',
        'updated_by',
        ];
}
