<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->bigIncrements('cat_id');
            $table->string('cat_name', 64);
            $table->bigInteger('fk_loof_document_id')->unsigned()->nullable();
            $table->bigInteger('fk_breed_id')->unsigned()->nullable();

            $table->foreign('fk_loof_document_id')->references('loof_document_id')->on('loof_documents');
            $table->foreign('fk_breed_id')->references('breed_id')->on('breeds');
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
        Schema::dropIfExists('cats');
    }
}
