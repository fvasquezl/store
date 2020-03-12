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
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('quantity')->default(0);
            $table->decimal('actual_price',12,2)->default(0);
            $table->decimal('old_price',12,2)->default(0);
            $table->unsignedInteger('discount_percent')->default(0);
            $table->text('short_description');
            $table->text('long_description');
            $table->text('specs');
            $table->text('interesting_data');
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('sales')->default(0);
            $table->string('state');
            $table->char('active',3);
            $table->char('principal_slide',3);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
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
