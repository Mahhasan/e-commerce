<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferproduct extends Model
{
    use HasFactory;

     protected $fillable = ['transferid', 'showroomid', 'productid', 'barcode', 'qty', 'cprice','note'];
    
}
