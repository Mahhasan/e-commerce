<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use App\Models\SuppliarInfo;
use App\Models\Productinfo;
use App\Models\Purchaseinfo;
use App\Models\Subcategory;
use App\Models\Vat;


class Purchaseinfo extends Model
{
    use HasFactory;


    protected $fillable =[
        'purchaseid', 'orderid', 'barcode', 'productid', 'orderdate', 'delivarydate', 'suppliarid', 'vatid', 'produttype', 'size', 'expiredate', 'unitcost', 'profite', 'unitsellsprice', 'quentity', 'totalprice', 'cprice', 'other', 'paymenttype', 'referid', 'amount', 'chequestatus', 'description'
    ];

    public function subcategory()
    {

        return $this->HasOne(Subcategory::class, 'id', 'subcategoryid');

    }
    public function category()
    {

        return $this->HasOne(ProductCategory::class, 'id', 'categoryid');
    }
  
  	public function product()
    {
        return $this->belongsTo(Productinfo::class, 'productid', 'productid');
    }

    public function suppliar()
    {

        return $this->HasOne(SuppliarInfo::class, 'suppliarid', 'suppliarid');
    }

    public function productinfo()
    {

        return $this->HasOne(Productinfo::class, 'productid', 'productid');

    }
    public function vat()
    {

        return $this->HasOne(Vat::class, 'id', 'vatid');

    }
    public function productname()
    {
        return $this->HasOne(Productinfo::class, 'productid', 'productid');
    }

    public function suppliars()
    {
        return $this->belongsTo(Suppliarinfo::class, 'suppliarid', 'suppliarid');
    }
  
  	public static function generatedLastId()
    {
        $latestId = DB::table('purchaseinfos')->latest('purchaseid')->first();
        if ($latestId) {
            preg_match('/\d+/', $latestId->purchaseid, $matches);
            $latestId = $matches[0];
        } else {
            $latestId = 0;
        }
        return str_pad($latestId + 1, 4, '0', STR_PAD_LEFT);

    }
  	
  
    
}
