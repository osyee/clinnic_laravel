<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Age',
        'specialization_id',
        'Phone'
      ];
      protected $casts = [
          "Phone"=> "integer",
          "name"=> "string",
          "Age"=> "integer",
          "specialization_id"=> "integer"
          ];
}
