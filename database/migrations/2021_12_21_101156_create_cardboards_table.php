<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardboards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->nullable();
            $table->string('name');
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')
                ->references('id')
                ->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardboards');
    }
}
