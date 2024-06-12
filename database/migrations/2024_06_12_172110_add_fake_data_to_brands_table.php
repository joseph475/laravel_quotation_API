<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddFakeDataToBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $faker = Faker::create();

      for ($i = 0; $i < 15; $i++) {
        $data = [
            'name' =>  $faker->unique()->word,
        ];

        DB::table('tbl_brands')->insert($data);
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
