<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddFakeDataToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $faker = Faker::create();
      $suppliers = DB::table('tbl_suppliers')->pluck('id')->toArray();

      $productType = ['Item', 'Services'];

      for ($i = 0; $i < 20; $i++) {
        $price = $faker->randomFloat(2, 10, 1000);
        $cost = $faker->randomFloat(2, 10, 1000);
        $techPrice = $faker->randomFloat(2, 10, 1000);
        $date = $faker->dateTimeThisMonth();

        $data = [
            'itemCode' => $faker->unique()->randomNumber(8),
            'itemName' => $faker->word,
            'description' => $faker->sentence,
            'classification' => $faker->word,
            'supplierId' => $faker->randomElement($suppliers),
            'cost' => $price,
            'retailCost' => $cost,
            'techPrice' => $techPrice,
            'product' => $faker->randomElement($productType),
            'expiry' => $date,
            'stock' => rand(1, 100),
            'batchNo' => $faker->unique()->randomNumber(4),
            // Add other fields here
        ];

          // Insert the fake data into the database
          DB::table('tbl_items')->insert($data);
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
