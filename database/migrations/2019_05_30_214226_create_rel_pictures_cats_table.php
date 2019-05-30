<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelPicturesCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_pictures_cats', function (Blueprint $table) {
            $table->bigIncrements('rel_id');
            $table->bigInteger('fk_cat_id')->unsigned();
            $table->bigInteger('fk_picture_id')->unsigned();
            $table->timestamps();

            // $table->unique('fk_cat_id', 'fk_picture_id');
            
            $table->foreign('fk_cat_id')->references('cat_id')->on('cats')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('fk_picture_id')->references('picture_id')->on('pictures')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_pictures_cats');
    }
}
