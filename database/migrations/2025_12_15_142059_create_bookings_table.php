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
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->text('customer_address');
            $table->enum('residence_type', ['house', 'apartment', 'office'])->default('house');
            $table->enum('car_type', ['small', 'medium', 'large']);
            $table->enum('service_type', ['wash', 'detail', 'coating']);
            $table->date('booking_date');
            $table->time('booking_time');
            $table->decimal('price', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
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
