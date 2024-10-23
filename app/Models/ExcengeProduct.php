<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcengeProduct extends Model
{
    use HasFactory;

    protected $fillable = ['cartid', 'productid', 'barcode', 'qty'];
}
