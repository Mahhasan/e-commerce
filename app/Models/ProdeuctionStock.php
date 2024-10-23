<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdeuctionStock extends Model
{
    use HasFactory;

    protected $fillable = ['productid', 'barcode', 'stockin', 'stockout', 'date'];

}
