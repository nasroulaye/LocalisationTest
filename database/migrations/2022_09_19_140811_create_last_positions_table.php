<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('latitude', 191)->nullable();
            $table->string('longitude', 191)->nullable();
            $table->unsignedBigInteger('user_id')->index('last_positions_user_id_foreign');
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
        Schema::dropIfExists('last_positions');
    }
}
