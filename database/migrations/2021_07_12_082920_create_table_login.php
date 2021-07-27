<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return Login
     */
    public function up()
    {
        Schema::create('table_login', function (Blueprint $table) {
            $table->id();
            $table->string('UserName');
            $table->string('password');

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
        Schema::dropIfExists('table_login');
    }
}
