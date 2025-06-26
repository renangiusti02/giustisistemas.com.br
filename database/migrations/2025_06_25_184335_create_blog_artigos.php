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
        Schema::create('blog_artigos', function (Blueprint $table) {
            $table->id('Id');
            $table->date('Data');
            $table->string('Key', 45)->unique();
            $table->string('Categoria', 45);
            $table->string('Titulo', 100);
            $table->string('Descricao', 255);
            $table->text('HTML');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_artigos');
    }
};
