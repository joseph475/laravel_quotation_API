<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddFakeDataToCustomersTable extends Migration
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
            'custId' => $faker->unique()->randomNumber(8),
            'lastName' =>  $faker->lastName,
            'firstname' =>  $faker->firstName,
            'middleInitial' => strtoupper($faker->randomLetter . $faker->randomLetter),
            'mobileNo' => $faker->phoneNumber,
            'address' => $faker->streetAddress,
            // Add other fields here
        ];

        // Insert the fake data into the database
        DB::table('tbl_customers')->insert($data);
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('tbl_customers', function (Blueprint $table) {
        $table->dropColumn('custId');
        $table->dropColumn('lastName');
        $table->dropColumn('firstname');
        $table->dropColumn('middleInitial');
        $table->dropColumn('mobileNo');
        $table->dropColumn('address');
      });
    }
}
