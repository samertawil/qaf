<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('common_related', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_website_corner')->constrained('statuses')->comment('زاوية الموقع');
            $table->string('corner_name')->comment('زاوية الموقع');
            $table->foreignId('common_type_id')->constrained('statuses')->comment('نوع الارتباط');
            $table->string('type_name')->comment('اسم الارتباط');
            $table->foreignId('start_id')->nullable()->constrained('content_stars')->comment('خاص للنجم');
            $table->string('value');
            $table->softDeletes();
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('common_related');
    }
};
