<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubtitleLevelFrequencyDurationMaxTimeTimeRestUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('units', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('title');
            $table->string('level')->nullable()->after('day');
            $table->string('frequency')->nullable()->after('level');
            $table->string('duration')->nullable()->after('frequency');
            $table->integer('max_time')->nullable()->after('duration');
            $table->string('time_rest')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('units', function (Blueprint $table) {
            $table->dropColumn('subtitle');
            $table->dropColumn('level');    
            $table->dropColumn('frequency');
            $table->dropColumn('duration');
            $table->dropColumn('max_time');
            $table->integer('time_rest');
        });
    }
}
