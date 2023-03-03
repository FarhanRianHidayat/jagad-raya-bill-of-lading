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
            $table->enum('precarriage',['Air','Sea','Road','Rail']);
            $table->string('vessel');
            $table->string('voyagenumber');
            $table->string('placeofreceipt');
            $table->string('portofloading');
            $table->string('portofdischarge');
            $table->string('placeofdelivery');
            $table->string('finaldestination');
            $table->date('date');
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
