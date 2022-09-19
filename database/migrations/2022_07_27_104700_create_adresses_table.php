<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 191)->nullable();
            $table->string('telephone', 191);
            $table->text('lieu_populaire');
            $table->string('latitude', 191);
            $table->string('longitude', 191);
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('user_id')->index('adresses_user_id_foreign');
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
        Schema::dropIfExists('adresses');
    }
}
