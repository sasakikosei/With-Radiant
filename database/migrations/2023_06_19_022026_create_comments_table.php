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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('comment')->nullable(true);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('recruit_id')->nullable(true);
            $table->unsignedBigInteger('watch_id')->nullable(true);
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('recruit_id')->references('id')->on('recruit_members');
            $table->foreign('watch_id')->references('id')->on('watch_members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
