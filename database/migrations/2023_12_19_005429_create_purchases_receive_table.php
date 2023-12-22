<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePurchasesReceiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $suppliers = DB::table('tbl_suppliers')->pluck('id')->toArray();

      Schema::create('tbl_purchases_receiving', function (Blueprint $table) {
        $table->id();
        $table->string('purchaseNo');
        $table->unsignedBigInteger('item_id');
        $table->unsignedBigInteger('supplier_id');
        $table->integer('quantity');
        $table->float('cost', 8, 2);
        $table->string('batchNo');
        $table->date('dateReceive');
        $table->timestamps();

        $table->foreign('supplier_id')
            ->references('id')
            ->on('tbl_suppliers')
            ->onDelete('cascade');

        $table->foreign('item_id')
            ->references('id')
            ->on('tbl_items')
            ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_purchases_receiving');
    }
}
