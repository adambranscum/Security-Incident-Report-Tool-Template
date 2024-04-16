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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('branch');
            $table->text('date');
            $table->text('time');
            $table->text('staff');
            $table->text('header');
            $table->text('nature');
            $table->text('offender');
            $table->text('offender_age');
            $table->text('offender_phone');
            $table->text('offender_lib');
            $table->text('offender_address');  
            $table->text('offender_city');
            $table->text('offender_state');
            $table->text('offender_zip');
            $table->text('description'); 
            $table->text('victim');
            $table->text('victim_age');
            $table->text('victim_phone');
            $table->text('victim_lib');
            $table->text('victim_address');  
            $table->text('victim_city');
            $table->text('victim_state');
            $table->text('victim_zip');
            $table->text('action'); 
            $table->text('witness'); 
            $table->text('witness_two');
            $table->text('witness_three');
            $table->text('file_name'); 
            $table->text('file_name_nature'); 
            $table->text('file_name_police');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
