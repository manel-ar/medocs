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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nom_service');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
