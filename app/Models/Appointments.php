<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'Date',
        'Time',
        'doctor_id',
        'user_id'
      ];
      protected $casts = [
          "user_id"=> "integer",
          "doctor_id"=> "integer"
          ];
}
