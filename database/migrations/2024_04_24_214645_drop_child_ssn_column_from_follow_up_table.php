<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropChildSsnColumnFromFollowUpTable extends Migration
{
    public function up()
    {
        Schema::table('follow_up', function (Blueprint $table) {
            $table->dropColumn('childSSN');
        });
    }

    public function down()
    {
        Schema::table('follow_up', function (Blueprint $table) {
            $table->string('childSSN')->nullable();
        });
    }
}
