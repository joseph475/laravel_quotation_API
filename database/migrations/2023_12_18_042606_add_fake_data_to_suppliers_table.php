<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddFakeDataToSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'supplierId' => $faker->unique()->randomNumber(8),
                'supplierName' => $faker->company,
                'mobileNo' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'termsApply' => $faker->text(20),
                // Add other fields here
            ];

            // Insert the fake data into the database
            DB::table('tbl_suppliers')->insert($data);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('tbl_suppliers', function (Blueprint $table) {
        $table->dropColumn('supplierId');
        $table->dropColumn('supplierName');
        $table->dropColumn('mobileNo');
        $table->dropColumn('address');
        $table->dropColumn('termsApply');
      });
    }
}
