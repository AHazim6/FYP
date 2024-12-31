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
            $table->foreignId('treatment_id')
                ->nullable()
                ->constrained('treatments')
                ->onDelete('cascade')
                ->after('patient_id'); // Adjust placement if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('medical_reports', function (Blueprint $table) {
            $table->dropForeign(['treatment_id']);
            $table->dropColumn('treatment_id');
        });
    }
};
