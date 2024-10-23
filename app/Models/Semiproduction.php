<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semiproduction extends Model
{
    use HasFactory;

    protected $fillable = ['productionid', 'barcode', 'productid', 'suppliarid', 'orderdate', 'delivarydate', 'unitcost', 'extra', 'design', 'design1', 'qty',  'productioncost', 'totalmaterialcost', 'cprice', 'status'];
}
