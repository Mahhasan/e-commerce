<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_stocke extends Model
{
    use HasFactory;
  
  
  protected $fillable = ['showroomid', 'barcode', 'suppliarid', 'productid', 'vat', 'price'];
}
