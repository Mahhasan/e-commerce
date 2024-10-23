<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materialbillinfo extends Model
{
    use HasFactory;

    protected $fillable = ['billid', 'purchaseid', 'suppliarid', 'payment_method', 'chequeno', 'paidamount', 'dueamount'];
}
