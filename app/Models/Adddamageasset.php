<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adddamageasset extends Model
{
    use HasFactory;

    protected $fillable = ['assetid', 'assetname', 'description', 'price', 'count_date'];
}
