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
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('category_id');
            $table->text('goal');
            $table->json('stage');
            $table->smallinteger('complexity');
            $table->text('duration');
            $table->text('participants');
            $table->text('social_form');
            $table->text('learning_environment');
            $table->text('explanation');
            $table->text('example')->nullable();
            $table->text('obstacles')->nullable();
            $table->text('tips')->nullable();
            $table->smallinteger('preparation_level');
            $table->text('preparation');
            $table->text('material');
            $table->unsignedBigInteger('source_id')->nullable();
            $table->text('online')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('methods');
    }
};
