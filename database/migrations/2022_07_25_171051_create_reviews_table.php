<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();//usuario/link
            $table->string('name');//nome de quem escreveu a resenha
            $table->string('title_book');//nome do livro
            $table->string('writer');//autor
            $table->longText('review');//resenha
            $table->boolean('available');//está disponivel na biblioteca
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
