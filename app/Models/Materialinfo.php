<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materialinfo extends Model
{
    use HasFactory;

    protected $fillable = ['materialid', 'materialname', 'type', 'note'];
}
