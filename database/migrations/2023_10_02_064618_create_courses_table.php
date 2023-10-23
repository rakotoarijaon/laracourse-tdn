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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('chauffeur_id')->unsigned();
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs');
            $table->integer('voiture_id')->unsigned();
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->dateTime('course_dateheuredepart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
