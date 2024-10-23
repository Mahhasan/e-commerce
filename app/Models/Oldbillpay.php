<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oldbillpay extends Model
{
    use HasFactory;

    protected $fillable = ['oldbillid', 'suppliarid', 'bankname', 'chequeno', 'amount', 'note', 'date'];
}
