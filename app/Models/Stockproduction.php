<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockproduction extends Model
{
    use HasFactory;

    protected $fillable = ['warehoiseid','productid','barcode','stockin','stockout'];
}
