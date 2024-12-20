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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ic')->unique();
            $table->string('gender');
            $table->string('age');
            $table->string('phone'); // Ensure this column exists
            $table->string('address'); // Ensure this column exists
            $table->string('parent_name');
            $table->boolean('consent_form')->default(false);
            $table->boolean('medical_history_form')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
