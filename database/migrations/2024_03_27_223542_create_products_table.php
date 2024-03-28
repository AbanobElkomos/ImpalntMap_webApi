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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
            $table->foreignUuid("company_id");
            $table->string("name");
            $table->string("img")->nullable();
            $table->string("Type")->nullable();
            $table->string("Level")->nullable();
            $table->string("Connection_Type")->nullable();
            $table->string("Connection_Feature")->nullable();
            $table->string("Connection_Shape")->nullable();
            $table->string("Screwdriver_Shape")->nullable();
            $table->double("Screwdriver_Size")->nullable();
            $table->string("Head_Shape")->nullable();
            $table->Boolean("Head_Microthreads")->nullable();
            $table->string("Body_Shape")->nullable();
            $table->string("Body_Threads")->nullable();
            $table->string("Apex_Shape")->nullable();
            $table->string("Apex_Hole")->nullable();
            $table->Boolean("Apex_Grooves")->nullable();



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};