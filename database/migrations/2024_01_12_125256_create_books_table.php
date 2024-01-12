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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique()->comment('Заголовок');
            $table->longText('description')->comment('Описание');
            $table->foreignId('author_id')->constrained('authors')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
