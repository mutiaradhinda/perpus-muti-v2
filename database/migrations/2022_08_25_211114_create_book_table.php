<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('tahun_terbit');
            $table->foreignId('id_penulis')->nullable();
            $table->foreignId('id_penerbit')->nullable();
            $table->foreignId('id_kategori')->nullable();
            $table->text('sinopsis');
            $table->string('image');
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
        Schema::dropIfExists('book');
    }
}
