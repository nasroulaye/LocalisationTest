<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('prix')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('user_id')->index('courses_user_id_foreign');
            $table->unsignedBigInteger('livreur_id')->nullable()->index('courses_livreur_id_foreign');
            $table->unsignedBigInteger('adresse_id')->index('courses_adresse_id_foreign');
            $table->unsignedBigInteger('status')->default(0);
            $table->unsignedBigInteger('status_delivery')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
