<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDeposit extends Model
{
    use HasFactory;


    protected $fillable = ['bankname', 'slipno', 'sources', 'depositor', 'amount', 'deposit_date'];


}
