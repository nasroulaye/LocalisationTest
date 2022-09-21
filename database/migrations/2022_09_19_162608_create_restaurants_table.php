<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 191)->nullable();
            $table->text('adresse')->nullable();
            $table->string('telephone', 191)->nullable();
            $table->string('latitude', 191)->nullable();
            $table->string('longitude', 191)->nullable();
            $table->string('token', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('pseudo', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('avatar', 191)->nullable();
            $table->string('cover', 191)->nullable();
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('pre_commande')->default(1);
            $table->unsignedBigInteger('status')->default(1);
            $table->integer('featured')->default(0);
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
        Schema::dropIfExists('restaurants');
    }
}
