<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
  
    protected $fillable = ['cartid', 'name', 'mobile', 'discount', 'refer', 'discountamount', 'sale_date'];
}
