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
        Schema::create('reserveringen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamer_id')
                ->onDelete('cascade');
            $table->string('gast_naam');
            $table->string('email')->unique();
            $table->string('telefoon');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('speciale_verzoeken');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserveringen');
    }
};
