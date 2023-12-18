<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->insert([
          'userId' => '0001',
          'userName' => 'jsp475',
          'password' => bcrypt('jsp475'),
          'accessLevel' => 'admin',
          'branchLevel' => 'main',
      ]);
    }
}
