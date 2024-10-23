<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semiproductionsmaterial extends Model
{
    use HasFactory;

    protected $fillable = ['productionid', 'materialid', 'unitcost', 'qty', 'type'];
}
