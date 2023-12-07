<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_page_etcs', function (Blueprint $table) {
            $table->id();
            $table->string("home_title");
            $table->string("home_subtitle");
            $table->text("tech_discription");
            $table->string("totle_student");
            $table->string("totle_course");
            $table->string("totle_review");
            $table->text("video_discription");
            $table->text("video_url");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_etcs');
    }
};
