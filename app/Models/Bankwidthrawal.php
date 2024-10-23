<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankwidthrawal extends Model
{
    use HasFactory;
  
    protected $fillable = ['bankname', 'purpose', 'chequeno', 'whowidthrawal', 'amount', 'date', 'note'];
}
