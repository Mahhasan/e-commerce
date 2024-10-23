<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellposting extends Model
{
    use HasFactory;
    
    protected $fillable = ['totalamount', 'cardamount', 'cashamount', 'vat', 'totalproduct', 'totaldiscount'];
}
