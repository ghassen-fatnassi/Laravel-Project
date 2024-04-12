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
        Schema::create('articles', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('category');
            $table->string('title');
            $table->text('description');
            $table->text('body');
            $table->unsignedBigInteger('author_id');
            $table->integer('likes');
            $table->integer('comments');
            $table->integer('bookmarks');
<<<<<<< HEAD
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->binary('image')->nullable();
=======
            $table->string('image')->nullable();

            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            
>>>>>>> f624fc138d2313d9465e14eb2fe1ac32eba927e4

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};