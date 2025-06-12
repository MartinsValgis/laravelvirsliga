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
        Schema::create('goals', function (Blueprint $table) {
    $table->id();
    $table->foreignId('goalscorer_id')->constrained('players');
    $table->foreignId('assist_id')->nullable()->constrained('players');
    $table->foreignId('match_id')->constrained('matches');
    $table->float('minute', 4, 1);
    $table->boolean('own_goal')->default(false);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
