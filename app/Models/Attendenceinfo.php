<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendenceinfo extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'in_time', 'out_time', 'count_date'];
}
