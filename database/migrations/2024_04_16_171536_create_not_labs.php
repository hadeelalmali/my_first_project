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
        Schema::create('not_labs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lab_id');
            $table->string('not_content');
            $table->date('not_date');
            $table->unsignedBigInteger('model_id');
        

            //$table->foreign('lab_id')->references('id')->on('labs');
            //$table->foreign('model_id')->references('id')->on('models');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('not_labs');
    }
};
