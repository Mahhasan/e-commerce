<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditetypeinfo extends Model
{
    use HasFactory;

    protected $fillable = ['creditetypeid', 'name', 'group', 'category'];
}
