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
        Schema::create('trainmodels', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('file_size');
            $table->bigInteger('user_id');
            $table->string('status')->default('training');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainmodels');
    }
};
