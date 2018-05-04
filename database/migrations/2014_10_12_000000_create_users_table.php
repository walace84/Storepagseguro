<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Além de fazer isso é preciso ir no controller auth
     *  RegistreController e passar os dados lá também.
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 150)->unique();
            $table->string('password');

            $table->string('cpf')->nullable();
            
            $table->string('street')->nullable();            
            $table->integer('number')->nullable();            
            $table->string('complement')->nullable();            
            $table->string('district')->nullable();            
            $table->integer('postal_code')->nullable();            
            $table->string('city')->nullable();            
            $table->string('state')->nullable();            
            $table->string('country')->nullable();            
            
            $table->string('phone', 15)->nullable();            
            $table->integer('area_code')->nullable();            
            $table->date('birth_date')->nullable(); 



            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}