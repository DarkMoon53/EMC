<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mostrar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_cliente");
            $table->unsignedBigInteger("id_producto");
            $table->foreign("id_cliente")->references("id")->on("cliente");
            $table->foreign("id_producto")->references("id")->on("productos");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mostrar');
    }
};
