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
        Schema::create('lab_analysis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('analysis_id');
            $table->unsignedBigInteger('lab_id');
            $table->decimal('cost', 8, 2);
          

           // $table->foreign('analysis_id')->references('id')->on('analysis');
           // $table->foreign('lab_id')->references('id')->on('labs');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('lab_analysis');
     
    }
};
