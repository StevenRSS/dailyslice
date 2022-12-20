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
        Schema::create('categories_images', function (Blueprint $table) {
            $table->id();
            $table->string("headerimages");
            $table->string("priceimages");
            $table->string("setlistimages1");
            $table->string("setlistimages2");
            $table->string("setlistimages3");
            $table->string("setlistimages4");
            $table->foreignIdFor(\App\Models\categories::class);
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
        Schema::dropIfExists('categories_images');
    }
};
