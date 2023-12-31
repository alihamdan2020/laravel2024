<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
          //do not change column name id (best practice)
            $table->id();
            $table->timestamps();
            $table->string('productName');
            $table->float('productPrice');
            // first step - code below mean i want to insert into DB a json object
            $table->json('ingredients');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
