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
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('posts');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // We won't implement down() since we're permanently removing these tables
    }
};
