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
            $table->string('img_profile')->after('name')->default('/media/default.jpg');
            $table->bigInteger('phone')->after('name')->nullable();
            $table->string('address')->after('name')->nullable();
            $table->string('surname')->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('img_profile');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('surname');
        });
    }
};
