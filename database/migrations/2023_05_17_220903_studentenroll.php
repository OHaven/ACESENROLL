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
        Schema::create('studentenrolls', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->nullable();
            $table->String('course')->nullable();
            $table->String('schoolyear')->nullable();
            $table->String('yearlevel')->nullable();
            $table->integer('clearance_id')->nullable();
            $table->integer('prf_id')->nullable();
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
