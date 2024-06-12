<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_ extends Model
{
  use HasFactory;

  protected $table = 'tbl_models';

  protected $fillable = [
      'name',
  ];
}
