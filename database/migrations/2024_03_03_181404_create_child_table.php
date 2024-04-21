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
        Schema::create('child', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing primary key
            $table->string('childSSN')->unique(); // This creates a unique column for child SSN
            $table->string('first_name');
            $table->string('last_name');
            $table->date('DOB');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->decimal('weight', 5, 2)->nullable()->default(5);
            $table->decimal('height', 5, 2)->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child');
    }
};
