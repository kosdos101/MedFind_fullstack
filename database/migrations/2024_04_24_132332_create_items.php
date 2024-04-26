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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item-name',length:25)->nullable(false);
            $table->date('expire-date')->nullable(false);
            $table->unsignedInteger('price')->nullable(false);
            $table->boolean('prescription-requirment')->nullable(false);
            $table->unsignedInteger('on-stock-quantity')->nullable(false);
            $table->string('category-id');
            $table->foreign('category-id')->references('category-id')->on('categorys')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
