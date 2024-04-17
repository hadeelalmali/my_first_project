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
        Schema::create('online_distances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_date_loc_id');
            $table->float('distance');
            $table->unsignedBigInteger('lab_loc_id');
           

           // $table->foreign('user_date_loc_id')->references('id')->on('user_date_loc');
           // $table->foreign('lab_loc_id')->references('id')->on('lab_loc');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_distances');
    }
};
