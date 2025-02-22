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
        Schema::create('technology_docs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // for URL (e.g., "laravel-create-project")
            $table->string('sidebar_title');    // Short title for sidebar
            $table->string('technology');            // Full title for the doc
            $table->text('description');        // Detailed description or instructions
            $table->longText('code')->nullable(); // Code snippet (optional)
            $table->integer('position')->default(0); // For ordering
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technology_docs');
    }
};
