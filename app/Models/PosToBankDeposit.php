<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosToBankDeposit extends Model
{
    use HasFactory;

    protected $fillable = ['cartid', 'cardno', 'amount', 'sale_date'];
}
