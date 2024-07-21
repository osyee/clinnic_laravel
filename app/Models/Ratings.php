<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    protected $fillable = [
        'Rating',
        'Comments',
        'User_id',
        'Doctor_id'
      ];
      protected $casts = [
          "Doctor_id"=> "integer",
          "User_id"=> "integer",
          "Comments"=> "string",
          "Rating"=> "integer"
          ];
}
