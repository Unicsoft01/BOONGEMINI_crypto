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
        Schema::create('rois', function (Blueprint $table) {
            $table->id();
            $table->string('roi'); // deposit/100 * days
            $table->string('user_id');
            $table->string('plan_id');
            $table->string('due_days');
            $table->string('day');
            $table->string('status');
            $table->string('payout');
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
        Schema::dropIfExists('rois');
    }
};
