<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign(['adresse_id'])->references(['id'])->on('adresses');
            $table->foreign(['user_id'])->references(['id'])->on('users');
            $table->foreign(['livreur_id'])->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_adresse_id_foreign');
            $table->dropForeign('courses_user_id_foreign');
            $table->dropForeign('courses_livreur_id_foreign');
        });
    }
}
