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
        Schema::create('detail_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignid('course_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->foreignid('responsable_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->datetime('date')->nullable();
        $table->string('lieu');
        $table->string('motif');
        $table->datetime('dateheurearriver')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_courses');
    }
};
