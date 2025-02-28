<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('program_episodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->string('program_name',150);
            $table->tinyInteger('e_no');
            $table->string('e_name');
            $table->string('e_title');
            $table->enum('media_type',['url','video'])->default('url');
            $table->string('url');
            $table->text('e_content')->nullable();
            $table->text('e_description')->nullable();
            $table->text('e_note')->nullable();
            $table->date('stream_date')->nullable();
            $table->string('media_duration',20)->nullable();
            $table->string('cover_image');
            $table->json('similar_e')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('favorite')->default(false);
            $table->tinyInteger('rate')->nullable();
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->json('content_type')->nullable();
            $table->foreignId('star_id')->nullable()->constrained('content_stars');
            $table->string('content_start')->nullable()->comment(' نجم الحلقة');
            $table->json('tags')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('hot_feed')->nullable();
            $table->string('hot_description')->nullable();
            $table->unique(['program_id','e_no','e_name']);
            // $table->unique(['program_id','e_name']);
            $table->softDeletes();
            $table->timestamps();
           
        });

        DB::statement('
        ALTER TABLE program_episodes 
        ADD CONSTRAINT check_rate_max CHECK (rate >= 0 AND rate <= 5)
    ');
    }

   




    public function down(): void
    {
        Schema::dropIfExists('program_episodes');
    }
};

 
 