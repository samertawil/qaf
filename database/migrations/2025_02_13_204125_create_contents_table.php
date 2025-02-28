<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('table_name');
            $table->integer('content_table_id');
            $table->string('content_name');
            $table->date('content_created_date');
            $table->foreignId('created_user_id')->constrained('users');
            $table->string('content_slug')->nullable();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
