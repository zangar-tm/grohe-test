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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->text('title')->nullable();
            $table->text('code')->nullable();
            $table->text('slug')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('overview')->nullable();
            $table->decimal('old_price')->nullable();
            $table->decimal('new_price')->nullable();
            $table->json('statuses')->nullable();
            $table->boolean('in_stock')->default(true);
            $table->string('image')->nullable();
            $table->json('blueprints')->nullable();
            $table->json('conditions')->nullable();
            $table->json('carousel')->nullable();
            $table->json('instructions')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('position')->default(999);
            $table->json('videos')->nullable();
            $table->integer('article_id')->nullable();
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
};
