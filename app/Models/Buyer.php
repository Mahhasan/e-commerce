<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;


    protected $fillable = [ 'buyerid', 'name', 'companyname', 'address', 'mobileno', 'telephoneno', 'description'];
}
