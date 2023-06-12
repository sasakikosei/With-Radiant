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
        Schema::create('watch_members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('content')->nullable(true);
            $table->string('match_team')->nullable(true);
            $table->string('root_team')->nullable(true);
            $table->string('time')->nullable(true);
            $table->unsignedBigInteger('user_id')->nullable(true);
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('watch_members');
    }
};
