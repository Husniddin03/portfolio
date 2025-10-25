<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // POSTS
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        // CONTENTS
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->timestamps();
        });

        // COMMENTS
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        // POST_MEDIAFILES
        Schema::create('post_mediafiles', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->string('type');
            $table->foreignId('content_id')->constrained('contents')->onDelete('cascade');
            $table->timestamps();
        });

        // FILES
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->string('type');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });

        // QUOTES
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->text('quote');
            $table->string('name');
            $table->string('job');
            $table->string('img')->nullable();
            $table->timestamps();
        });

        // CONTACTS
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('files');
        Schema::dropIfExists('post_mediafiles');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('contents');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('users');
    }
};
