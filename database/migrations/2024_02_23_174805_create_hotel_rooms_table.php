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
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_type')->nullable();
            $table->integer('room_number')->nullable();
            $table->integer('avilability')->nullable();
            $table->string('view')->nullable();
            $table->string('amenities')->nullable();
            $table->bigInteger('image_id')->nullable();
            $table->foreignId('hotel_id')->nullable()->constrained('hotels')->onDelete('cascade');
            $table->integer('room_type_id')->nullable()->constrained('room_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_rooms');
    }
};
