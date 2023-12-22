<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'tbl_items';

    protected $fillable = [
        'itemCode',
        'itemName', 
        'description',
        'classification',
        // 'supplierId',
        'cost',
        'retailCost',
        'techPrice',
        'product',
        'stock',
    ];
}
