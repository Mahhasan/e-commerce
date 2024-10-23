<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posinfo;

class Pos_payment_ref extends Model
{
    use HasFactory;

    protected $table = 'pos_payment_ref';


    public function posInfo()
    {

        return $this->belongsTo(Posinfo::class, 'cartid', 'cartid');
        
    }
}




























