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
        Schema::create('_post', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('characteristics');
            $table->string('tests');
            $table->string('crops');
            $table->string('manage');
            $table->string('methods');
            $table->string('challenges');
            $table->string('other_challenges');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_post');
    }
};
