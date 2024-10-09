<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nette\Utils\Strings;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('nombre')->nullable();
            $table->text('tipo')->nullable();
            $table->text('descrip1')->nullable();
            $table->text('descrip2')->nullable();
            $table->text('descrip3')->nullable();
            $table->text('descrip4')->nullable();
            $table->text('ubica')->nullable();
            $table->text('info')->nullable();

            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
