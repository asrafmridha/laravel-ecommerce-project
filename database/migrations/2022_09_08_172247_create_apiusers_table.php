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
        Schema::create('apiusers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("address");
            $table->string("phone");
            $table->string("email");
            $table->integer("nid");
            $table->string("appname")->nullable();
            $table->string("description")->nullable();
            $table->string("url")->nullable();
            $table->string("clientid")->nullable();
            $table->string("token")->nullable();
            $table->integer("status")->default(1);
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
        Schema::dropIfExists('apiusers');
    }
};
