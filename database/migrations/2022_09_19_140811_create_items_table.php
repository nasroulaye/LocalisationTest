<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 191)->nullable();
            $table->string('photo', 191)->nullable();
            $table->text('details')->nullable();
            $table->double('prix')->nullable();
            $table->unsignedBigInteger('status')->default(1);
            $table->unsignedBigInteger('categorie_id')->index('items_categorie_id_foreign');
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
        Schema::dropIfExists('items');
    }
}
