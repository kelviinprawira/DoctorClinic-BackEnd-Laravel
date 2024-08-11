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
        Schema::create('patient_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->foreignId('doctor_id')->constrained('doctors')->cascadeOnDelete();
            $table->dateTime('schedule_time');
            $table->text('complaint')->nullable();
            $table->enum('status', ['waiting', 'processing', 'processed', 'canceled', 'completed'])->default('waiting');
            $table->integer('no_antrian');
            $table->enum('payment_method', ['cash', 'qris'])->default('cash');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_schedules');
    }
};
