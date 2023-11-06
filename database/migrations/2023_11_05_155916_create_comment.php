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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('message')->charset('utf8')->collation('utf8mb4_unicode_ci');
            
            $table->integer('authorId');
            $table->integer('jobId');
            $table->tinyInteger('isActive')->default(1);
            $table->tinyInteger('isArchived')->default(0);
            $table->dateTime('createdAt')->useCurrent();
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
