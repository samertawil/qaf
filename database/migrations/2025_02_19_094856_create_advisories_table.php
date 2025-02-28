<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('advisories', function (Blueprint $table) {
            $table->id();
            $table->string('advisory_name');
            $table->string('advisory_title');
            $table->string('content_category');
            $table->string('advisory_question')->nullable();
            $table->text('advisory_answer')->nullable();
            $table->text('notes')->nullable();
            $table->enum('media_type', ['url', 'video'])->default('url');
            $table->string('url');
            $table->date('stream_date')->nullable()->comment('تاريخ البث');
            $table->string('media_duration')->nullable()->comment('مدة البث');
            $table->string('cover_image');
            $table->json('similar_a')->nullable()->comment('فتاوي مشابهة');
            $table->boolean('active')->default(true);
            $table->boolean('favorite')->default(false);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->foreignId('star_id')->nullable()->constrained('content_stars');
            $table->string('content_start')->nullable()->comment(' نجم الحلقة');
            $table->string('hot_feed')->nullable();
            $table->string('hot_description')->nullable();
            $table->json('tags')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->softDeletes();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advisories');
    }
};
