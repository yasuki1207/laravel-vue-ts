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
        Schema::create('soccer_leagues', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('リーグ名');
            $table->text('summary')->comment('リーグ概要');
            $table->string('prefix', 50)->comment('prefix');
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
        Schema::dropIfExists('soccer_leagues');
    }
};
