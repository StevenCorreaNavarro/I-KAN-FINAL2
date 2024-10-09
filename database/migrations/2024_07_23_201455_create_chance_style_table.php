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
        Schema::create('chance_style', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('chance_id')->nullable();;
            $table->foreign('chance_id')
                ->references('id')
                ->on('chances')
                ->onDelete('cascade')
                ->unUpdate('cascade');

            $table->unsignedBigInteger('style_id')->nullable();;
            $table->foreign('style_id')
                ->references('id')
                ->on('styles')
                ->onDelete('cascade')
                ->unUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chance_style');
    }
};
