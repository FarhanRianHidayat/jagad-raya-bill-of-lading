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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['Accepted','Shipping','Arrived']);
            $table->foreignId('job_id');
            $table->string('bolnumber');
            $table->foreignId('transport_id');
            $table->date('shipping_date');
            $table->foreignId('consignee_id');
            $table->foreignId('shipper_id');
            $table->foreignId('shipping_address_id');
            $table->foreignId('finaldestination_id');
            $table->foreignId('good_id');
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
        Schema::dropIfExists('shipments');
    }
};
