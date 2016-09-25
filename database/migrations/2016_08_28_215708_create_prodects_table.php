<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prodect_name');
            $table->integer('prodect_price');
            $table->string('prodect_discription');
            $table->string('prodect_pic');
            $table->integer('prodect_quantity');
            $table->integer('catogrey_id');
            $table->integer('admin_id');
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
        Schema::drop('prodects');
    }
}
