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
        Schema::create('companies', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
            $table->string("name");
            $table->string("img")->nullable();
            $table->string("desc")->nullable();
            $table->string("address")->nullable();
             $table->string("website")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("youtube")->nullable();


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};