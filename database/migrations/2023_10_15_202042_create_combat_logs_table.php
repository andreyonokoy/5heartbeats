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
        Schema::create('combat_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text');
            $table->foreignIdFor(\App\Models\Combat::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combat_logs');
    }
};
