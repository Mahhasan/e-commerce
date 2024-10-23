<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physicalinventory extends Model
{
    use HasFactory;

    protected $fillable = ['inventoryno', 'barcode', 'suppliarid', 'showroomid', 'pqty', 'productid', 'stock', 'physicalcount', 'unitcost', 'unitsellprice', 'countdate'];
}
