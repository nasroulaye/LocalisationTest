<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('nom', 191)->nullable();
            $table->string('prenoms', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->text('adresse')->nullable();
            $table->string('telephone', 191)->nullable();
            $table->string('whatsapp', 191)->nullable();
            $table->string('token', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('avatar', 191)->nullable();
            $table->string('profession', 191)->nullable();
            $table->date('date_naissance')->nullable();
            $table->double('solde')->nullable()->default(0);
            $table->unsignedBigInteger('type_user')->default(1);
            $table->unsignedBigInteger('sexe')->default(1);
            $table->unsignedBigInteger('status')->default(1);
            $table->integer('is_occuped')->default(0);
            $table->integer('is_working')->default(0);
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
