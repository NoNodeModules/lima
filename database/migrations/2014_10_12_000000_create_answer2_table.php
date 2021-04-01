<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswer2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers2', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('n61')->nullable();
$table->string('n62')->nullable();
$table->string('n63')->nullable();
$table->string('n64')->nullable();
$table->string('n65')->nullable();
$table->string('n66')->nullable();
$table->string('n67')->nullable();
$table->string('n68')->nullable();
$table->string('n69')->nullable();
$table->string('n70')->nullable();
$table->string('n71')->nullable();
$table->string('n72')->nullable();
$table->string('n73')->nullable();
$table->string('n74')->nullable();
$table->string('n75')->nullable();
$table->string('n76')->nullable();
$table->string('n77')->nullable();
$table->string('n78')->nullable();
$table->string('n79')->nullable();
$table->string('n80')->nullable();
$table->string('n81')->nullable();
$table->string('n82')->nullable();
$table->string('n83')->nullable();
$table->string('n84')->nullable();
$table->string('n85')->nullable();
$table->string('n86')->nullable();
$table->string('n87')->nullable();
$table->string('n88')->nullable();
$table->string('n89')->nullable();
$table->string('n90')->nullable();
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
        Schema::dropIfExists('answers')->nullable();
    }
}
