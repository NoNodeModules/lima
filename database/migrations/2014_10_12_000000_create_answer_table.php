<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers1', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('n1')->nullable();
            $table->string('n2')->nullable();
            $table->string('n3')->nullable();
            $table->string('n4')->nullable();
            $table->string('n5')->nullable();
            $table->string('n6')->nullable();
            $table->string('n7')->nullable();
            $table->string('n8')->nullable();
            $table->string('n9')->nullable();
            $table->string('n10')->nullable();
            $table->string('n11')->nullable();
            $table->string('n12')->nullable();
            $table->string('n13')->nullable();
            $table->string('n14')->nullable();
            $table->string('n15')->nullable();
            $table->string('n16')->nullable();
            $table->string('n17')->nullable();
            $table->string('n18')->nullable();
            $table->string('n19')->nullable();
            $table->string('n20')->nullable();
            $table->string('n21')->nullable();
            $table->string('n22')->nullable();
            $table->string('n23')->nullable();
            $table->string('n24')->nullable();
            $table->string('n25')->nullable();
            $table->string('n26')->nullable();
            $table->string('n27')->nullable();
            $table->string('n28')->nullable();
            $table->string('n29')->nullable();
            $table->string('n30')->nullable();
            $table->string('n31')->nullable();
            $table->string('n32')->nullable();
            $table->string('n33')->nullable();
            $table->string('n34')->nullable();
            $table->string('n35')->nullable();
            $table->string('n36')->nullable();
            $table->string('n37')->nullable();
            $table->string('n38')->nullable();
            $table->string('n39')->nullable();
            $table->string('n40')->nullable();
            $table->string('n41')->nullable();
            $table->string('n42')->nullable();
            $table->string('n43')->nullable();
            $table->string('n44')->nullable();
            $table->string('n45')->nullable();
            $table->string('n46')->nullable();
            $table->string('n47')->nullable();
            $table->string('n48')->nullable();
            $table->string('n49')->nullable();
            $table->string('n50')->nullable();
            $table->string('n51')->nullable();
            $table->string('n52')->nullable();
            $table->string('n53')->nullable();
            $table->string('n54')->nullable();
            $table->string('n55')->nullable();
            $table->string('n56')->nullable();
            $table->string('n57')->nullable();
            $table->string('n58')->nullable();
            $table->string('n59')->nullable();
            $table->string('n60')->nullable();
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
