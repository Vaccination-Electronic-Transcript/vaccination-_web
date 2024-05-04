<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUpsTable extends Migration
{
    public function up()
    {
        Schema::create('follow_up', function (Blueprint $table) {
            $table->id();
            $table->string('child_ssn');
            $table->string('child_name');
            $table->decimal('height', 5, 2); // Adjust precision and scale as needed
            $table->decimal('weight', 5, 2); // Adjust precision and scale as needed
            $table->date('DOB');
            $table->unsignedBigInteger('vaccine_id');
            $table->foreign('child_ssn')->references('childSSN')->on('child');
            $table->foreign('vaccine_id')->references('id')->on('vaccines');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('follow_up');
    }
}
