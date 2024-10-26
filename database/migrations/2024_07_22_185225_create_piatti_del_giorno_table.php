<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiattiDelGiornoTable extends Migration
{
    public function up()
    {
        Schema::create('piatti_del_giorno', function (Blueprint $table) {
            $table->id();
            $table->string('nome_italiano');
            $table->string('nome_inglese');
            $table->text('descrizione_italiano')->nullable();
            $table->text('descrizione_inglese')->nullable();
            $table->decimal('prezzo', 8, 2);
            $table->boolean('enable')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('piatti_del_giorno');
    }
}
