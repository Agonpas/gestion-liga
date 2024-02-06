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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('fed_number', 10)->unique();
            $table->string('position');
            $table->string('name', 120);
            $table->date('birth_date');
            $table->string('phone', 20);
            $table->string('email', 50)->nullable();
            $table->unsignedBigInteger('team_id');
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
