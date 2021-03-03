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
            $table->string('name',100);
            $table->string('slug');
            $table->float('price',8,2);
            $table->float('selling_price',8,2);
            $table->float('height',8,2)->nullable();
            $table->float('weight',8,2)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('products');
    }
}
