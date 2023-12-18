<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = 'tbl_customers';

    protected $fillable = [ 
        'custId',
        'lastName', 
        'firstName',
        'middleInitial',        
        'mobileNo',
        'address',
    ];
}