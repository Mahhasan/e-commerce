<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialPuchase extends Model
{
    use HasFactory;

    protected $fillable = ['purchaseid',  'materialid', 'category', 'frombuy', 'box', 'qty', 'unitcost', 'totalprice', 'receiptno', 'othercost', 'whopurchase', 'orderdate', 'purchasedate', 'note'];
}
