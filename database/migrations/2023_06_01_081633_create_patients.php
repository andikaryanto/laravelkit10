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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('address', 500)->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('rt')->nullable(false);
            $table->string('rw')->nullable(false);
            $table->unsignedBigInteger('village_id')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->timestamps();


            $table->foreign('village_id')
                ->references('id')->on('villages')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
