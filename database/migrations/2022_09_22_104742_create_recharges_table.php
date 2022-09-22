<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('telephone', 191)->nullable();
            $table->double('montant')->nullable();
            $table->unsignedBigInteger('type')->default(1);
            $table->double('frais')->nullable();
            $table->string('identifier')->nullable();
            $table->unsignedBigInteger('status')->default(1);
            $table->unsignedBigInteger('user_id')->index('recharges_user_id_foreign');
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
        Schema::dropIfExists('recharges');
    }
}
