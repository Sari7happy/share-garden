<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable =[
        'prefecture_name',
        'genle_name',
        'reservation_number_of_people',
        'reservation_date',
        'image_path'
    ];
}
