<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('showroom_productrecusitions', function (Blueprint $table) {
            $table->id();
            $table->string('barcode');
            $table->string('productid');
            $table->string('supplier_id');
            $table->float('unitcost');
            $table->float('unitsellprice');
            $table->float('vat');
            $table->float('cprice');
            $table->integer('stock');
            $table->integer('qty');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showroom_productrecusitions');
    }
};
