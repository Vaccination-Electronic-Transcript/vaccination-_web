<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parentss', function (Blueprint $table) {
            // Rename 'name' column to 'firstname'
            $table->renameColumn( 'name','firstname');

            // Add 'lastname' column
            $table->string('lastname')->after('firstname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parentss', function (Blueprint $table) {
            // Revert 'firstname' column back to 'name'
            $table->renameColumn( 'name','firstname');

            // Drop 'lastname' column
            $table->dropColumn('lastname');
        });
    }
}
