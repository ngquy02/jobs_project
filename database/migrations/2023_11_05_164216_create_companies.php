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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->charset('utf8mb')->collation('utf8mb4_unicode_ci');
            $table->string('slug')->charset('utf8mb')->collation('utf8mb4_unicode_ci');
            $table->string('logo')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->string('url')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->string('industry')->charset('utf8mb')->collation('utf8mb4_unicode_ci');
            $table->string('twitter')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->string('bio')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->dateTime('createdAt')->useCurrent();
            $table->dateTime('updatedAt');
            $table->tinyInteger('isArchived')->default(0);
            $table->tinyInteger('isActive')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
