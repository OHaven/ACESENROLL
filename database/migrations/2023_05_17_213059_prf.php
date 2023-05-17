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
        Schema::create('prfs', function (Blueprint $table) {
            $table->id();
            $table->String('userid')->nullable();
            $table->String('filename')->nullable();
            $table->String('file_path')->nullable();
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
