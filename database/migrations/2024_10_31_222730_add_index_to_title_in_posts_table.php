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
        Schema::table('posts', function (Blueprint $table) {
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // $table->dropUnique('title');
            $doctrineManager = Schema::getConnection()->getDoctrineSchemaManager();
            $indexesFoundInPosts = $doctrineManager->listTableIndexes('posts');

            if(array_key_exists('posts_title_unique', $indexesFoundInPosts))
            {
                $table->dropIndex('posts_title_unique');
            }
        });
    }
};
