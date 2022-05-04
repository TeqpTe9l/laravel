<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Фамилия');
            $table->string('Имя');
            $table->string('Отчество');
            $table->date('Дата_рождения');
            $table->string('Адрес');
            $table->biginteger('Номер_телефона');
            $table->string('Класс');
            $table->double('Балл_учащегося');
            $table->string('Срок_обучения');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studs');
    }
}
