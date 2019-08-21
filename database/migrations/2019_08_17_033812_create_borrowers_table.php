<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fathername');
            $table->string('nrc_no');
            $table->string('work');
            $table->string('ph_no');
            $table->integer('acre_no');
            $table->string('village
            ');
            $table->string('township');
            $table->string('state');
            $table->boolean('varified');
            $table->integer(' rid');
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
        Schema::dropIfExists('borrowers');
    }
}
