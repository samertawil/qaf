<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->boolean('active')->default(true);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->json('tag')->nullable();
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};