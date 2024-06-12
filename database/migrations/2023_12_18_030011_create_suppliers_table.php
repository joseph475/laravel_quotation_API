<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::dropIfExists('tbl_suppliers');
      Schema::create('tbl_suppliers', function (Blueprint $table) {
          $table->id();
          $table->string('supplierId');
          $table->string('supplierName');
          $table->string('mobileNo');
          $table->text('address');
          $table->string('termsApply');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_suppliers');
    }
}
