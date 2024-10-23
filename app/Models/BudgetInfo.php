<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetInfo extends Model
{
    use HasFactory;

    protected $fillable = ['expenceid', 'from', 'to', 'amount', 'note'];
}
