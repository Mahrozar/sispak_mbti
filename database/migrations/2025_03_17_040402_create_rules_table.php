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
    Schema::create('rules', function (Blueprint $table) {
        $table->id();
        $table->string('mbti_type');
        $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade');
        $table->decimal('cf_value', 5, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
