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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('project_name');
            $table->text('description');
            $table->string('technologies');
            $table->date('launch_date');
            $table->string('git_link')->nullable();
            $table->string('role');
            $table->string('image_url')->nullable();
            $table->enum('status', ['Completato', 'In corso', 'In manutenzione']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
