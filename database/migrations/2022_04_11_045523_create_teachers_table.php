<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Фамилия');
            $table->string('Имя');
            $table->string('Отчество');
            $table->date('Дата_рождения');
            $table->string('Должность');
            $table->decimal('Зарплата');
            $table->biginteger('Номер_телефона');
            $table->string('Стаж');
            $table->string('Адрес');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
