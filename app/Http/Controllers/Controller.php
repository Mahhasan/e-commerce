<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Productinfo;
use App\Models\ProductCategory;
use App\Models\SuppliarInfo;
use App\Models\ShowroomInfo;
use App\Models\PurchasePaymentinfo;
use App\Models\Cashpeople;
use App\Models\Stock;
use App\Models\Vat;
use App\Models\Subcategory;
use App\Models\Producttype;
use App\Models\Paymentinfo;
use App\Models\Cartproduct;
use App\Models\Cartid;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

   

    // public  function __construct(Request $request)
    // {
        

    //      if(config('app.env') === 'production') {
    //         \URL::forceScheme('https');
    //    }
      
      
    //   $suppliar = Suppliarinfo::take(2000)->get();

    //     View::share('suppliar', $suppliar);
        
        
    //     $paymenttype = PurchasePaymentinfo::take(20)->get();
    //     View::share('paymenttype', $paymenttype);

    //   $refer = Cashpeople::take(100)->get();
    //     View::share('refer', $refer); 
      
    //   $product = Productinfo::take(1000)->get();
    //     View::share('product', $product);

      
    //   $producttype = Producttype::take(2000)->get();

    //     View::share('producttype', $producttype);

    // }
}
