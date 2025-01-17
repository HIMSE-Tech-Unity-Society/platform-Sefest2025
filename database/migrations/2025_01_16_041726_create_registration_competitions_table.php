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
        Schema::create('registration_competitions', function (Blueprint $table) {
            $table->id();
            $table->enum("type", ["webdev","poster","uiux"]);
            $table->string("team");
            $table->json("member");
            $table->string("gmail");
            $table->string("phone");
            $table->string("drive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_competitions');
    }
};
