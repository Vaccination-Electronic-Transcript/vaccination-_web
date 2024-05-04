<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToChildTable  extends Migration
{
    public function up()
    {
        Schema::table('children', function (Blueprint $table) {
            // Add vaccine_id column if it doesn't exist
            if (!Schema::hasColumn('child', 'vaccine_id')) {
                $table->unsignedBigInteger('vaccine_id')->nullable();
                $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');
            }

            // Add followUp_id column if it doesn't exist
            if (!Schema::hasColumn('child', 'followUp_id')) {
                $table->unsignedBigInteger('followUp_id')->nullable();
                $table->foreign('followUp_id')->references('id')->on('follow_up')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('children', function (Blueprint $table) {
            // Drop foreign key constraint for vaccine_id
            $table->dropForeign(['vaccine_id']);
            // Drop the vaccine_id column
            $table->dropColumn('vaccine_id');

            // Drop foreign key constraint for followUp_id
            $table->dropForeign(['followUp_id']);
            // Drop the followUp_id column
            $table->dropColumn('followUp_id');
        });
    }
}
