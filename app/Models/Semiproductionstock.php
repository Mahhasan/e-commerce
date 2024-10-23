<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semiproductionstock extends Model
{
    use HasFactory;

    protected $fillable = ['productionid', 'productid', 'stockin', 'stockout', 'date'];
}
