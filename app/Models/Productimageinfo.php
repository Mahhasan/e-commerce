<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimageinfo extends Model
{
    use HasFactory;

    protected $fillable = ['productid', 'image'];
}
