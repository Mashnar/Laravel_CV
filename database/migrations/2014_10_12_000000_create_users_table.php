<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Imie');
            $table->string('Nazwisko');
            $table->integer('PESEL');
             $table->bigInteger('NIP');
             $table->string('adres');
             $table->string('e_mail')->unique();
             $table->string('haslo');
             $table->string('opis_osoby');
             $table->string('zainteresowania');
             $table->string('umiejetnosci');
             $table->string('Doswiadczenie');
             $table->date('data_ur');
             $table->timestamp('data_rej');
             $table->date('data_aktualizacji');
             $table->smallInteger('ocena');
             $table->binary('plik');
            $table->rememberToken();
            $table->boolean('is_admin');
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
        Schema::drop('users');
    }
}
