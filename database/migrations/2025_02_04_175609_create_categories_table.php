<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('parent_id')->nullable()->constrained('categories');
            $table->string('description')->nullable();
            $table->boolean('active')->default(true);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->string('Categorie_image')->nullable();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
