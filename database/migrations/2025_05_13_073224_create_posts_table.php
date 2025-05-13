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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger + primary + auto increment
            $table->string('title', 255); // required
            $table->string('slug', 255)->unique(); // unique + required
            $table->text('body'); // required
            $table->unsignedBigInteger('user_id'); // foreign key ke tabel users
            $table->unsignedBigInteger('category_id')->nullable(); // foreign key ke tabel categories
            $table->timestamp('published_at')->nullable(); // nullable

            $table->timestamps(); // created_at & updated_at

            // Index dan foreign key constraints
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->index('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
