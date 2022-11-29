<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable =[
        'reservation_number_of_people',
        'reservation_date',
        'image_path'
    ];
}
