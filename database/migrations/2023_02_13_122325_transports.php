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
            $table->foreignId('placeofreceipt_id');
            $table->string('vessel');
            $table->string('voyagenumber');
            $table->foreignId('portofloading_id');
            $table->foreignId('portofdischarge_id');
            $table->foreignId('placeofdelivery_id');
            $table->foreignId('finaldestination_id');
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
