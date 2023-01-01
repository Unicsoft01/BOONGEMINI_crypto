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
        Schema::create('referred_users', function (Blueprint $table) {
            $table->id();
            $table->string('daily_earn'); // Deposit/100 * ref%
            $table->string('user_id'); 
            $table->string('plan_id'); 
            $table->string('days'); 
            $table->string('status'); 
            $table->string('payout'); 
            $table->string('day'); 
            $table->string('refered_user_id'); 
            $table->string('has_made_deposit'); 
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
        Schema::dropIfExists('referred_users');
    }
};
