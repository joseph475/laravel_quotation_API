<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddFakeDataToPurchasesReceived extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $faker = Faker::create();

      $itemDetails = DB::table('tbl_items')->pluck('id')->toArray();
      $suppliers = DB::table('tbl_suppliers')->pluck('id')->toArray();
      $date = $faker->dateTimeThisMonth();

      for ($i = 0; $i < 10; $i++) {
        $data = [
            'purchaseNo' => $faker->unique()->randomNumber(8),
            'item_id' => $faker->randomElement($itemDetails),
            'supplier_id' => $faker->randomElement($suppliers),
            'quantity' =>  $faker->randomNumber(2),
            'cost' =>  $faker->randomNumber(2),
            'batchNo' => $faker->unique()->randomNumber(4),
            'dateReceive' => $date
        ];

        // Insert the fake data into the database
        DB::table('tbl_purchases_receiving')->insert($data);
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
