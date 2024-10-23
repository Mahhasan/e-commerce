<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorysub extends Model
{
    use HasFactory;
    
    protected $fillable = ['categoryid', 'subcategoryname'];
}
