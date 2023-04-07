<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('vservice_id');
            $table->foreign('vservice_id')->references('id')->on('vendor_services');
            $table->string('booking_name');
            $table->string('booking_email');
            $table->string('booking_address');
            $table->string('booking_contact');
            $table->string('booking_date');
            $table->string('booking_time');
            $table->string('booking_description');
            $table->string('status');
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
        Schema::dropIfExists('booking_requests');
    }
}
