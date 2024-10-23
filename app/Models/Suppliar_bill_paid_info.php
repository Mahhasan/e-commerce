<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliar_bill_paid_info extends Model
{
    use HasFactory;

     protected $fillable = ['billno','suppliar_id', 'purchaseid', 'refer', 'paymentmethod', 'bankname', 'chequeno', 'paidamount', 'duamount', 'date'];

}
