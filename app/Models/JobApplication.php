<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->string('education');
            $table->decimal('years_of_exp');
            $table->string('other') ;
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};