<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenBalance extends Model
{
    use HasFactory;

    protected $fillable = ['sonalybank', 'standerschaterdbank', 'cashbalance'];
}
