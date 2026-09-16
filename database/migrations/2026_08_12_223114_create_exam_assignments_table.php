<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exam_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->constrained('students')
                ->cascadeOnDelete();
            $table->foreignId('exam_paper_id')
                ->constrained('exam_papers')
                ->cascadeOnDelete();
            $table->boolean('attempted')->default(false);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->decimal('score', 8, 2)->nullable();
            $table->timestamps();
            $table->unique([
                'student_id',
                'exam_paper_id'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_assignments');
    }
};
