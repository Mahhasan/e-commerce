<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuppliarInfo extends Model
{
    use HasFactory;

    protected $fillable =['suppliarid', 'companyname', 'name', 'address', 'mobile', 'suppliertype'];
}
