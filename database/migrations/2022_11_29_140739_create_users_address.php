<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_address', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_user')->unsigned()->index();
            $table->string('address');
            $table->string('city');
            $table->integer('cp');
            $table->string('country');
        });
        Schema::table('products', function (Blueprint $table){
            $table->integer('id_user')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_address');
    }
};
