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
        Schema::table('projects', function (Blueprint $table) {
            // Relationship => using foreignId to match the int size type cuz integer is smaller
            $table->foreignId('user_id')->constrained('users');
            //? can add ->after('id') 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //dropForeign() removes the rule connecting projects.user_id to users.id.
            // dropColumn() removes the actual user_id column.
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
