<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->integer('price')->default(0); // in rupiah
            $table->integer('stock')->default(0);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable(); // store as JSON string or comma separated
            $table->integer('calories')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
