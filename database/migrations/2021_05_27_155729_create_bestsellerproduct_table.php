<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestsellerproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestsellerproduct', function (Blueprint $table) {
            $table->id('bestproduct_id');
            $table->string('bestproduct_img');
            $table->string('bestproduct_name');
            $table->string('bestproduct_description');
            $table->string('bestproduct_price');    
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
        Schema::dropIfExists('bestsellerproduct');
    }
}
