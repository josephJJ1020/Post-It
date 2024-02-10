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
            $table->id();
            $table->foreignId('author_id')->nullable()->default(null)->references('id')->on('users')->onDelete('cascade'); // foreign key for user
            // $table->foreign('author_name')->nullable()->default(null)->references('username')->on('users')->onDelete('cascade'); // foreign key for user
            $table->string('author_name'); // name of author; generated on controller if no author id; should be null for registered user
            $table->string('content'); // post content; single string
            $table->integer('archived')->default(0); // post archived indicator; 1 if post is archived, 0 if not
            $table->integer('likes')->default(0);
            $table->timestamps();
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
