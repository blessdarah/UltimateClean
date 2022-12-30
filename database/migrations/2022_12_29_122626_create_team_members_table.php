<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("nickname")->nullable();
            $table->string("position")->nullable();
            $table->string("address")->nullable();
            $table->string("email")->nullable();
            $table->string("telephone")->nullable();
            $table->string("gender");
            $table->date("dob")->nullable();
            $table->mediumText("about")->nullable();
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
        Schema::dropIfExists('team_members');
    }
};
