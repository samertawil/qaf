<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('library', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('book_title')->nullable();
            $table->foreignId('writer_id')->constrained('content_stars');
            $table->string('writer_name');
            $table->foreignId('book_category_id')->constrained('statuses');
            $table->string('book_category');
            $table->string('book_attchment');
            $table->string('cover_image')->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('paper_count')->nullable();
            $table->date('publish_date')->nullable();
            $table->json('similar_b')->nullable()->comment('فتاوي مشابهة');
            $table->boolean('active')->default(true);
            $table->boolean('favorite')->default(false);
            $table->json('tags')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->tinyInteger('part')->nullable(); // الجزء

            $table->unique(['book_name','writer_id']);
            $table->softDeletes();
          
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
