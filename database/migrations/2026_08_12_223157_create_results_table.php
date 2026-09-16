<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->constrained('students')
                ->cascadeOnDelete();
            $table->foreignId('exam_assignment_id')
                ->constrained('exam_assignments')
                ->cascadeOnDelete();
            $table->decimal('score', 8, 2)->default(0);
            $table->decimal('total_marks', 8, 2)->default(0);
            $table->decimal('percentage', 5, 2)->default(0);
            $table->string('status');
            $table->timestamps();
            $table->unique('exam_assignment_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};