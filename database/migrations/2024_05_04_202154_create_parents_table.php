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
        Schema::create('parents', function (Blueprint $table) {
            $table->string('ssn')->primary();
            $table->unsignedBigInteger('id')->unique();
            $table->string('name');
            $table->enum('gender', ['Male', 'Female']);
            $table->json('phone')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('job_id')->on('job_types')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
