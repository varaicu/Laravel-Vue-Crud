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
            $table->text('descriptionEn')->nullable();
            $table->text('descriptionTr')->nullable();
            $table->text('descriptionAr')->nullable();
            $table->text('descriptionKr')->nullable();
            $table->string('sku');
            $table->string('configuration_sku')->nullable();
            $table->string('qty');
            $table->string('featured');
            $table->decimal('sales_price');
            $table->decimal('raw_price');
            $table->integer('delivery_day')->nullable();
            $table->string('type'); //simple,configurable
            $table->decimal('height')->nullable();
            $table->decimal('weight')->nullable();
            $table->decimal('size')->nullable();
            $table->string('attribute_set');
            $table->string('visibility');
            $table->string('new_from')->nullable();
            $table->string('new_until')->nullable();
            $table->string('url_key')->nullable();
            $table->string('external_id');
            $table->string('ean')->nullable();
            $table->string('barcode');
            $table->string('hs_code')->nullable();
            $table->string('origin_country')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('brand')->nullable();
            $table->string('body_size')->nullable();
            $table->string('color')->nullable();
            $table->string('websites');
            $table->string('status');
            $table->foreignId('user_id')->nullable();
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
