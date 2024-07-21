<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_Conditions extends Model
{
    use HasFactory;
    protected $fillable = [
        'ConditionName',
        'Test',
        'Drugs',
        'Appointment_id'
      ];
      protected $casts = [
          "Appointment_id"=> "integer",
          "ConditionName"=> "string",
          "Test"=> "string",
          "Drugs"=> "string"
         
          ];
}
