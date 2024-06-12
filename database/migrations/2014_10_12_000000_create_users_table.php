<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_users');
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id();
            $table->string('userId');
            $table->string('userName');
            $table->string('password');
            $table->enum('accessLevel', ['admin', 'manager', 'userOnly', 'technician']);
            $table->string('branchLevel');
            $table->rememberToken();
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
        Schema::dropIfExists('tbl_users');
    }
}
