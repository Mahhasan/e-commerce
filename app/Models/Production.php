<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

     protected $fillable = ['productionid', 'productid', 'suppliarid', 'barcode', 'orderdate','delivarydate', 'design1', 'design2', 'qty', 'productioncost', 'totalcost', 'unitcost', 'cprice', 'unitsellprice', 'extra', 'vat', 'profit', 'totalmaterialcost', 'status'];
  
  
  
  
  public function product()
  {
        return $this->belongsTo(Productinfo::class, 'productid', 'productid');
  }
}
