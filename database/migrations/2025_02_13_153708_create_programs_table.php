<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {  // جدول البرامج
            $table->id();
            $table->string('name',150)->unique();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->string('cover_image');
            $table->foreignId('star_id')->nullable()->constrained('content_stars');
            $table->string('content_start')->nullable()->comment(' نجوم البرنامج');
            $table->json('similar_programs')->nullable()->comment('برامج مشابهة');
            $table->boolean('active')->default(true);
            $table->boolean('favorite')->default(false);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->json('content_type')->nullable()->comment('طبيعة محتوى البرنامج');
            $table->json('tags')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('hot_feed')->nullable();
            $table->string('hot_description')->nullable();
            $table->string('url')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};

  

    // // Populate the slug column  
    // DB::table('your_table_name')->get()->each(function ($item) {  
    //     DB::table('your_table_name')->where('id', $item->id)->update(['slug' => Str::slug($item->name)]);  
    // });  
 //}