<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Block\Element\Heading;

class CreateAboutusdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutusdetails', function (Blueprint $table) {
            $table->id();
            $table->string('heading_one');
            $table->string('heading_two');
            $table->string('description');
            $table->string('image');
            $table->string('author_name');
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
        Schema::dropIfExists('aboutusdetails');
    }
}
