<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//superadmin section 
Route::middleware(['auth', 'user-role:superadmin'])->group(function(){

    Route::get('/superadmin', [App\Http\Controllers\SuperadminController::class, 'formpage'])->name('superadmins');
	

  

});

//admin section
Route::middleware(['auth', 'user-role:admin'])->group(function(){


});


//account section
Route::middleware(['auth', 'user-role:accountadmin'])->group(function(){
  
   Route::get('accountadmin', [App\Http\Controllers\AccountController::class, 'accountdashboard'])->name('accountadmin');
  
   
  
  

});




//maintain section 
//production section 
Route::middleware(['auth', 'user-role:producttion'])->group(function(){

       
  
});



Route::middleware(['auth', 'user-role:suppliar'])->group(function(){

  Route::get('/suppliar', [App\Http\Controllers\SuppliarCustomer\SuppliarCustomerLosicalController::class, 'suppliar'])->name('suppliar');

}); 

