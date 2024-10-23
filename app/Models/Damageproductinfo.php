<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damageproductinfo extends Model
{
    use HasFactory;

    protected $fillable = ['showroomid', 'barcode', 'productid', 'suppliarid', 'unitcost', 'unitsellprice', 'qty', 'note', 'countdate'];
}
