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
        Schema::table('users', function (Blueprint $table) {
            $table->string('currency_preference')->nullable()->defaultValue('PRK');
            $table->text('image_url')->nullable();
            $table->text('banner_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('currency_preference');
            $table->dropColumn('image_url');
            $table->dropColumn('banner_url');
        });
    }
};
