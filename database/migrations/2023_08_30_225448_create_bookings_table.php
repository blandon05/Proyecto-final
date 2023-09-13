<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->text('Description');
            $table->timestamp('Initial_date')->nullable();
            $table->timestamp('End_date')->nullable();
            $table->integer('Price');
            $table->unsignedBigInteger('Service_id');
            $table->foreign('Service_id')->references('id')->on('services');
            $table->integer('Quantity_people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
