<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowroomProductrecusition extends Model
{
    use HasFactory;
    
    protected $fillable = ['barcode', 'productid', 'supplier_id', 'unitcost', 'unitsellprice', 'vat', 'cprice', 'stock', 'qty', 'purchaseqty', 'note', 'status'];
}
