<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionTransfer extends Model
{
    use HasFactory;
    
    protected $fillable = ['productid', 'barcode', 'showroomid', 'qty', 'cprice'];
}
