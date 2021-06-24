<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversacions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('contacto_id');
            $table->foreign('contacto_id')->references('id')->on('users');

            //lista de messjes del usuario
            $table->text('ultimo_mensages')->nullable();
            $table->dateTime('hora_ultimo_mensage')->nullable();

            //notificar los mensages
            $table->boolean('lista_notificaciones')->default(true);

            //bloquear usuario
            $table->boolean('has_blocked')->default(false);

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
        Schema::dropIfExists('conversacions');
    }
}
