<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_purchase_order', function (Blueprint $table) {
          $table->id();
          $table->string('invoiceNo');
          $table->date('dateOrdered');
          $table->string('encodedBy');
          $table->unsignedBigInteger('supplier_id');
          $table->timestamps();

          $table->foreign('supplier_id')
          ->references('id')
          ->on('tbl_suppliers')
          ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_purchase_order');
    }
}
