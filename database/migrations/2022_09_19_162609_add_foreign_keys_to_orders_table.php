<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign(['livreur_id'])->references(['id'])->on('users');
            $table->foreign(['user_id'])->references(['id'])->on('users');
            $table->foreign(['restaurant_id'])->references(['id'])->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_livreur_id_foreign');
            $table->dropForeign('orders_user_id_foreign');
            $table->dropForeign('orders_restaurant_id_foreign');
        });
    }
}
