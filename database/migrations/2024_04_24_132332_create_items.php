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
            $table->string('item-name',length:25);
            $table->date('expire-date');
            $table->unsignedInteger('price');
            $table->boolean('prescription-requirment');
            $table->unsignedInteger('on-stock-quantity')->nullable();
            $table->string('photo',300);
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
