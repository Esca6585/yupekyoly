<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_tm');
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('desc_tm')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('desc_ru')->nullable();
            $table->json('images');
            $table->integer('price');
            $table->integer('sale_price')->nullable();
            $table->integer('discount')->default(0);
            $table->string('sale_type')->nullable();
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
        Schema::dropIfExists('teas');
    }
}
