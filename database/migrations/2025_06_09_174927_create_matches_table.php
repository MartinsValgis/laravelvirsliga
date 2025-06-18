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
       Schema::create('matches', function (Blueprint $table) {
    $table->id();
    $table->foreignId('home_team_id')->constrained('teams');
    $table->foreignId('away_team_id')->constrained('teams');
    $table->foreignId('referee_id')->nullable()->constrained('referees');
    $table->datetime('date')->nullable();
    $table->integer('matchweek');
    $table->integer('homegoals')->nullable();
    $table->integer('awaygoals')->nullable();
    $table->string('stadium', 50)->nullable();
    $table->boolean('info')->default(false);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
