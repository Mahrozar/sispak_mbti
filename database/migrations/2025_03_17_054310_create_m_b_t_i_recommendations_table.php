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
        Schema::create('mbti_recommendations', function (Blueprint $table) {
            $table->id();
            $table->string('mbti_type'); // Tipe MBTI (misal: INFP, ENTJ)
            $table->text('job_recommendation')->nullable(); // Ubah ke TEXT dan bisa NULL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_recommendations'); // Perbaikan nama tabel
    }
};
