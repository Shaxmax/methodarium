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
            $table->text('stage');
            $table->smallinteger('complexity');
            $table->string('duration');
            $table->string('participants');
            $table->string('social_form');
            $table->string('learning_environment');
            $table->text('explanation');
            $table->text('example')->nullable();
            $table->text('obstacles')->nullable();
            $table->text('tips')->nullable();
            $table->smallinteger('preparation_level');
            $table->string('preparation');
            $table->string('material');
            $table->string('source')->nullable();
            $table->text('online')->nullable();
            $table->smallinteger('author');

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
