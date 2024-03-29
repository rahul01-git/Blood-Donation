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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('email');
            $table->string('password');
            $table->string('district');
            $table->string('address');
            $table->string('phone');
            $table->string('age');
            $table->string('group');
            $table->string('gender');
            $table->string('status');
            $table->string('token');
            $table->integer('role')->default(2)->comment('1->admin,2->user');
            $table->integer('RewardPoints')->default(0);
            $table->integer('RewardPointsUpdated')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last_seen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
