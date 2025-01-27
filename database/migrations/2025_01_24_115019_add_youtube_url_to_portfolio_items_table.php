<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->string('youtube_url')->nullable();
            $table->dropColumn('preview_image');
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->dropColumn('youtube_url');
            $table->string('preview_image')->nullable();
        });
    }
};
