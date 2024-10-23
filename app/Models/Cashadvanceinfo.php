<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashadvanceinfo extends Model
{
    use HasFactory;

    protected $fillable = ['memberid', 'chequeno', 'amount', 'from', 'to', 'note'];
}
