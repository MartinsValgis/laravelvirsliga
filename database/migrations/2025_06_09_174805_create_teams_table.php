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
        Schema::create('teams', function (Blueprint $table) {
    $table->id();
    $table->string('name', 30);
    $table->string('city', 30);
    $table->string('treneris', 30);
    $table->string('teamcolor', 7);
    $table->string('teamsecondarycolor', 7);
    $table->string('logo_path', 50)->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
