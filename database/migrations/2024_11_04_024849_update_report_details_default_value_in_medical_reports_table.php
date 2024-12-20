<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('medical_reports', function (Blueprint $table) {
            $table->text('report_details')->default('No report details')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('medical_reports', function (Blueprint $table) {
            $table->text('report_details')->default(null)->change();
        });
    }
};
