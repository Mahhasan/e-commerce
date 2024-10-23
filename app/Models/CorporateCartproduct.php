<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateCartproduct extends Model
{
    use HasFactory;


    protected $fillable = ['cartid', 'barcode', 'productid', 'suppliarid', 'qty', 'vat', 'price', 'sale_date'];
}
