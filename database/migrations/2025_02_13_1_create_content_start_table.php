<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
   

    public function up(): void
    {
        Schema::create('content_stars', function (Blueprint $table) {   // جدول المقدمين او النجوم
            $table->id();
            $table->string('f_name',25);
            $table->string('l_name',50);
            $table->string('full_name',150);
            $table->string('name_title',20)->nullable()->comment('اللقب'); 
            $table->string('nick_name')->nullable()->comment('الاسم المستعار'); 
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->json('content_type')->nullable()->comment('انواع المحتوى الذي يقدمه'); 
            $table->text('about_content_star')->nullable()->comment('نبذه عن المقدم'); ;
            $table->string('s_image')->nullable()->comment('صورة شخصية'); ;
            $table->json('most_common_media')->nullable()->comment('اشهر الفيديوهات '); 
            $table->json('most_common_programs')->nullable()->comment('اشهر البرامج'); 
            $table->tinyInteger('rate')->nullable()->comment('تقيم النجم'); 
            $table->string('slug')->unique();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement('
        ALTER TABLE content_start 
        ADD CONSTRAINT check_rate_max CHECK (rate >= 0 AND rate <= 5)
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presenters');
    }
};
