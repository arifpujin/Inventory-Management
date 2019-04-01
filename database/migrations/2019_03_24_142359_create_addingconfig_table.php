<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddingconfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addingconfig', function (Blueprint $table) {
        $table->Increments('id');
            $table->string('name');
            $table->text('isinya');
            $table->timestamps();
        });

        DB::table('addingconfig')->insert(array(
            array('name' => 'modemaintenance', 'isinya' => 'true'),
            array('name' => 'pengumuman', 'isinya' => 'welcome to inventory UNYtechTV'),
		));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
