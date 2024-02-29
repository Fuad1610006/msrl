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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('category')->comment('1=>Corporate, 2=>Project');
            $table->unsignedBigInteger('ship_id'); // Foreign key column
            $table->foreign('ship_id')->references('id')->on('ships')->onDelete('cascade');
            $table->timestamps();
            //This is not necessary if image is uploaded per project/ship. skip gallery model/migration.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
