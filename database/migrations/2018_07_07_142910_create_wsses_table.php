<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
              $table->string('w_name');
             $table->string('plumber');
             $table->string('scheme');
             $table->string('ps_type');
            $table->integer('population');
            $table->integer('served');
             $table->integer('bfs');
            $table->integer('institution');
            $table->integer('houses');
            $table->string('sector');
            $table->string('sector1')->nullable();
            $table->string('sector2')->nullable();
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
        Schema::dropIfExists('wsses');
    }
}
