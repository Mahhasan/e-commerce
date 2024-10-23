<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliar_bill_info extends Model
{
    use HasFactory;


    protected $fillable = ['suppliar_id', 'refer', 'purchaseid', 'bill', 'qty', 'status', 'date'];
}
