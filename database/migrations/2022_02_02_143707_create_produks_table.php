<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kategori')->unsigned();
            $table->integer('id_unit')->unsigned();
            $table->string('name');
            $table->string('code');
            $table->string('purchase_price');
            $table->string('sales_price');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategoris');
            $table->foreign('id_unit')->references('id')->on('units');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
