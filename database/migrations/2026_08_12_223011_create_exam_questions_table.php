<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('exam_paper_id')
                ->constrained('exam_papers')
                ->cascadeOnDelete();

            $table->foreignId('question_id')
                ->constrained('questions')
                ->cascadeOnDelete();

            $table->integer('sort_order')->default(1);
            $table->timestamps();
            $table->unique([
                'exam_paper_id',
                'question_id'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_questions');
    }
};

