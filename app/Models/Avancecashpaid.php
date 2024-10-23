<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avancecashpaid extends Model
{
    use HasFactory;

    protected $fillable = ['memberid', 'purchaseid', 'amount'];
}
