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
        Schema::create('student_dev_swot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('swot_name');
            $table->string('swot_objective');
            $table->unsignedBigInteger('swot_category_id');
            $table->string('swot_strengths');
            $table->string('swot_weaknesses');
            $table->string('swot_opportunities');
            $table->string('swot_threats');
            $table->string('swot_status')->default('Open');

            $table->integer('is_delete')->default('0');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('swot_category_id')->references('id')->on('student_dev_swot_categories');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_swot_models');
    }
};
