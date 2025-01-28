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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            
            $table->string('description');
            $table->dateTime('date_time');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->bigInteger('location');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('type_id')->constrained('types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
