<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_keywords', function (Blueprint $table) {
            $table->id();
            $table->string('keyword');
            $table->foreignId('product_id')->nullable();
            $table->string('tr');
            $table->string('en');
            $table->string('ar');
            $table->string('kr');
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
        Schema::dropIfExists('language_keywords');
    }
}
