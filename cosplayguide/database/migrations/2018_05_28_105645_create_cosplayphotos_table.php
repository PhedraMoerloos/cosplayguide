<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCosplayphotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosplayphotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo_url');
            $table->boolean('is_shown')->default(true);
            $table->timestamps();

            $table->integer('cosplay_id')->unsigned();

            $table->foreign('cosplay_id')
                  ->references('id')
                  ->on('cosplays')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cosplayphotos');
    }
}
