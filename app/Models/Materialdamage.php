<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materialdamage extends Model
{
    use HasFactory;

    protected $fillable = ['materialid', 'note', 'qty', 'count_date'];
    
}
