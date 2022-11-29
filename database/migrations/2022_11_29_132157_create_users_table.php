<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * code de migration
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('Password');
        });
//        Schema::table('users', function (Blueprint $table){
//           $table -> increments('id_order')->unsigned()->nullable()->index();
//        });
    }

    /**
     * Reverse the migrations.
     * code de suppression
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
