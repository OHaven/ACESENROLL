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
        Schema::create('student_subs', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->nullable();
            $table->String('course')->nullable();
            $table->String('subject')->nullable();
            $table->String('teacher')->nullable();
            $table->integer('grade')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
