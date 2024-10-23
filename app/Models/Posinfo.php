<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paymentinfo;

class Posinfo extends Model
{
    use HasFactory;

	protected $fillable = ['cartid', 'totalamount', 'totalvat', 'paymentid', 'discount', 'discountamount', 'returnamount', 'sale_date', 'Totaloriginalprice', 'profit', 'returnsellsid', 'totalunitcost', 'returnproductid'];

  	protected $casts = [
        'sale_date' => 'date',
    ];

    public function payment()
    {

        return $this->HasOne(Paymentinfo::class, 'id', 'paymentid');

    }

    public function suppliar()
    {


        return $this->HasOne(\app\Models\Suppliarinfo::class, 'suppliarid', 'suppliarid');

    }



}
