<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCosplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosplays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_serie');
            $table->string('slug')->nullable();
            $table->string('status')->default('shoppen');
            $table->string('thumbnail_url');
            $table->boolean('is_shown')->default(true);
            $table->timestamps();

            //deze info wordt pas ingevuld eens de cosplay af is, niet bij het creëren.
            $table->enum('difficulty', ['Gemakkelijk', 'Gemiddeld', 'Moeilijk'])->nullable();
            $table->integer('independence_percentage')->nullable();
            $table->integer('months_spent')->nullable();
            $table->integer('euros_spent')->nullable();
            $table->text('project_description')->nullable();
            $table->timestamp('published_at')->nullable();

            //unsigned --> moet positief zijn, geen -4 bv
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('cosplays');
    }
}
