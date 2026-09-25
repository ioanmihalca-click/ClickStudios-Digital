<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->string('category')->nullable()->after('slug');
            $table->string('category_ro')->nullable()->after('category');
            $table->string('status', 20)->nullable()->after('category_ro');
            $table->unsignedSmallInteger('year')->nullable()->after('status');
            $table->json('stack')->nullable()->after('year');
            $table->string('markdown_path')->nullable()->after('image');
        });
    }

    public function down(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->dropColumn(['category', 'category_ro', 'status', 'year', 'stack', 'markdown_path']);
        });
    }
};
