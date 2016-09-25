<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatogryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catogry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('catogry_name');
            $table->string('catogry_pic');
            $table->integer('catogry_TotalProdect');
            $table->string('catogry_discription');
            $table->integer('admin_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catogry');
    }
}
