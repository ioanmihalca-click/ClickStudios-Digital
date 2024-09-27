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
        Schema::table('subscribers', function (Blueprint $table) {
            $table->string('unsubscribe_token')->unique()->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('subscribers', function (Blueprint $table) {
            $table->dropColumn('unsubscribe_token');
        });
    }
};
