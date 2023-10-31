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
        Schema::create('Ilan', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->integer('katid');
            $table->float('fiyat');
            $table->string('aciklama')->nullable();
            $table->string('resim1')->nullable();
            $table->string('resim2')->nullable();
            $table->string('resim3')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('Ilan');
    }
};
