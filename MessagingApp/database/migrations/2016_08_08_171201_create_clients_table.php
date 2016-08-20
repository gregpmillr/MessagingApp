<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fName');
            $table->string('lName');
            $table->string('phoneNumber');
            $table->integer('mailing_id')->unsigned();
            $table->timestamps();
            $table->foreign('mailing_id')->references('id')->on('mailing_list');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client', function(Blueprint $table) {
            $table->dropForeign('clients_mailing_id_foreign');
        });
        Schema::drop('client');
    }
}
