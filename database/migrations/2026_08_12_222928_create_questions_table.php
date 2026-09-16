<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations*/
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {

            $table->foreignId('exam_paper_id')
                ->after('id')
                ->constrained('exam_papers')
                ->onDelete('cascade');

        });
    }

    /*Reverse the migrations*/
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {

            $table->dropForeign(['exam_paper_id']);

            $table->dropColumn('exam_paper_id');

        });
    }
};

