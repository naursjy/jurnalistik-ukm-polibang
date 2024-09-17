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
        Schema::table('m_news', function (Blueprint $table) {
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('m_categories');
            $table->unsignedBigInteger('category_id')->after('content');
            $table->foreign('category_id')->references('id')->on('m_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_add_category_id_to_m_news');
    }
};
