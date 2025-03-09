<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->string('title_ro')->after('title')->nullable();
            $table->text('description_ro')->after('description')->nullable();
            $table->string('technologies_ro')->after('technologies')->nullable();
            $table->text('features_ro')->after('features')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->dropColumn([
                'title_ro',
                'description_ro',
                'technologies_ro',
                'features_ro'
            ]);
        });
    }
};