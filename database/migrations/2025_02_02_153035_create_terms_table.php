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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('term_title');
            $table->string('term_description')->nullable();
            $table->string('term_hint')->nullable();
            $table->string('term_link')->nullable()->default(null);
            $table->smallInteger('repetition_rate')->default(0);
            $table->foreignId('dictionary_id')->constrained('dictionaries');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
