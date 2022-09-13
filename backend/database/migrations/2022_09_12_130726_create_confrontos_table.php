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
        Schema::create('confrontos', function (Blueprint $table) {
            $table->id();
            $table->string('local');
            $table->string('status');
            $table->dateTime('data');
            $table->foreignId('equipe_casa_id')->constrained('equipes')->cascadeOnDelete();
            $table->foreignId('equipe_visitante_id')->constrained('equipes')->cascadeOnDelete();
            $table->integer('gols_casa')->nullable();
            $table->integer('gols_visitante')->nullable();
            $table->foreignId('vencedor_id')->nullable()->constrained('equipes')->cascadeOnDelete();
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
        Schema::dropIfExists('confrontos');
    }
};
