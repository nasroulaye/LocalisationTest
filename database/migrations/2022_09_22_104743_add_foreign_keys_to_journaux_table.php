<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJournauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journaux', function (Blueprint $table) {
            $table->foreign(['admin_id'])->references(['id'])->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journaux', function (Blueprint $table) {
            $table->dropForeign('journaux_admin_id_foreign');
        });
    }
}
