<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->id();
            $table->string('itemCode');
            $table->string('itemName');
            $table->text('description');
            $table->string('classification');
            // $table->unsignedBigInteger('supplier_id');
            $table->float('cost', 8, 2)->nullable()->default(0);
            $table->float('retailCost', 8, 2)->nullable()->default(0);
            $table->float('techPrice', 8, 2)->nullable()->default(0);
            $table->enum('product', ['item', 'services']);
            $table->integer('stock')->nullable()->default(0);
            $table->timestamps();

            $table->unique(['itemCode']);

            // $table->foreign('supplier_id')
            // ->references('id')
            // ->on('tbl_suppliers')
            // ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_items');
    }
}
