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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->charset('utf8mb')->collation('utf8mb4_unicode_ci');
            $table->string('slug')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->text('description')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->text('requirements')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->dateTime('deadline')->default(null);
            $table->longText('eligibility')->charset('utf8mb')->collation('utf8mb4_bin')->default(null);
            $table->longText('references')->charset('utf8mb')->collation('utf8mb4_bin')->default(null);
            $table->enum('status', ['OPEN', 'REVIEW', 'CLOSED'])->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default('OPEN');
            $table->string('currency')->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default(null);
            $table->integer('rewardAmount')->default(null);
            $table->longText('rewards')->charset('utf8mb')->collation('utf8mb4_bin')->default(null);
            $table->integer('companyId');
            $table->enum('source', ['NATIVE', 'IMPORT'])->charset('utf8mb')->collation('utf8mb4_unicode_ci')->default('NATIVE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
