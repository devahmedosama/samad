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
        Schema::create('project_items', function (Blueprint $table) {
            $table->id();
            $table->char('image',255)->nullable();
            $table->char('name',255)->nullable();
            $table->char('sub_tile',255)->nullable();
            $table->text('text')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')
                       ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_items');
    }
};
