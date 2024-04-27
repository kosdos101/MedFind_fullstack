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
        Schema::create('supply', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('supply-price')->nullable(false);
            $table->string('supply-name',length:50)->nullable(false);
            $table->string('governorate');
            $table->foreign('governorate')->references('governorate')->on('shipping-dep');
            $table->string('supplier-id');
            $table->foreign('supplier-id')->references('supplier-id')->on('supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supply');
    }
};
