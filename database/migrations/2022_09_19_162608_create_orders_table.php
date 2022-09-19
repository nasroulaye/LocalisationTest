<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference')->nullable();
            $table->integer('pay_arrival')->default(0);
            $table->double('prix')->nullable();
            $table->double('prix_livraison')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('user_id')->index('orders_user_id_foreign');
            $table->unsignedBigInteger('livreur_id')->nullable()->index('orders_livreur_id_foreign');
            $table->unsignedBigInteger('restaurant_id')->index('orders_restaurant_id_foreign');
            $table->unsignedBigInteger('status')->default(0);
            $table->unsignedBigInteger('status_delivery')->default(0);
            $table->integer('adresse_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
