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
        Schema::create('reels', function (Blueprint $table) {
            $table->id();
            $table->string('reel_name',50);
            $table->string('reel_string',50)->nullable();
            $table->string('cover_image')->nullable();
            $table->foreignId('reel_category_id')->constrained('statuses');
            $table->string('reel_category');
            $table->foreignId('social_media_id')->constrained('statuses');
            $table->string('social_media_name');
            $table->string('url');
            $table->boolean('active')->default(true);
            $table->boolean('favorite')->default(false);
            $table->json('tags')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->string('hot_feed')->nullable();
            $table->string('hot_description')->nullable();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('reels');
    }
};
