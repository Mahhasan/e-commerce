<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brdbstock extends Model
{
    use HasFactory;


    protected $fillable = [ 'showroomid', 'barcode', 'productid', 'stockin', 'stockout', 'sale_date'];
}
