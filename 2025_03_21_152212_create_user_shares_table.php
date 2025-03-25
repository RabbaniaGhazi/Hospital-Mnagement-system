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
            Schema::create('user_shares', function (Blueprint $table) {
                $table->id(); 
                $table->foreignId('share_id')->constrained('shares')->onDelete('cascade'); 
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
                $table->unsignedBigInteger('doctor_patient_id'); 
                $table->text('user_share'); 
                $table->decimal('patient_fee', 8, 2)->nullable(); 
                $table->foreign('doctor_patient_id')->references('id')->on('doctor_patients')->onDelete('cascade');
                 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_shares');
    }
};
