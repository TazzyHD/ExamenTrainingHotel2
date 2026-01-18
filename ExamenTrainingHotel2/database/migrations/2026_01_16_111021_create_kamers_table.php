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
        Schema::create('kamers', function (Blueprint $table) {
            $table->id();
            $table->string('kamer_nummer')->unique();
            $table->enum('status', ['bezet', 'schoonmaak', 'beschikbaar']);
            $table->string('type'); // Eenpersoons, Tweepersoons, Suite, Deluxe
            $table->date('laatst_geklaard_op')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamers');
    }
};
