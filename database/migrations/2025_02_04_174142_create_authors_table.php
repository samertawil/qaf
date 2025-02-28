<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->unique();
            $table->string('nick_name')->nullable();
            $table->string('email')->mail();
            $table->text('bio')->nullable();
            $table->string('profile_image')->nullable();
            $table->boolean('active')->default(true);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
