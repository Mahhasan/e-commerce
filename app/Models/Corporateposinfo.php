<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporateposinfo extends Model
{
    use HasFactory;

    protected $fillable = ['cartid', 'buyerid', 'amount', 'totalvat', 'discount', 'totalprice', 'orderdate', 'buyercode', 'officecode', 'profit', 'totalunitcost', 'it', 'returncartid', 'productid', 'paymentmethod', 'paymentstatus', 'sale_date'];
}
