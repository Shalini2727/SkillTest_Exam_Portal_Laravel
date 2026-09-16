<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->foreignId('college_id')
                ->constrained('colleges')
                ->cascadeOnDelete();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('qualification');
            $table->integer('passing_year');
            $table->decimal('percentile', 5, 2);
            $table->decimal('tenth_percentage', 5, 2);
            $table->decimal('twelfth_percentage', 5, 2);
            $table->decimal('graduation_percentage', 5, 2);
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};