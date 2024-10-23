<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materialstock extends Model
{
    use HasFactory;

    protected $fillable = ['materialid', 'stockin', 'stockout'];
}
