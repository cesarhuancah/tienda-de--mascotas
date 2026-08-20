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
   public function up(): void
{
    Schema::create('mascotas', function ($table) {
        $table->id();
        $table->string('nombre_mascota');
        $table->string('especie');
        $table->integer('edad');
        $table->string('propietario');
        $table->text('sintomas')->nullable();
        $table->integer('stock')->default(0);
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
        //
    }
};
