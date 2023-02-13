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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->enum('precarriage',['air','sea','road','rail']);
            $table->string('placeofreceipt');
            $table->string('vessel');
            $table->string('voyagenumber');
            $table->string('portofloading');
            $table->string('portofdischarge');
            $table->string('placeofdelivery');
            $table->string('finaldestination');
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
        //
    }
};
