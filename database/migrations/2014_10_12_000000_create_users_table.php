<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->enum('level',['admin','petugas','kordinator']);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('addingconfig')->insert(array(
			array('username' => 'mimincantik', 'password' => bcrypt('tanyambaksiswi'), 'level' => 'admin', 'email' => 'ayuriyanti3@gmail.com'),
		));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
