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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('main_logo');
            $table->string('location');
            $table->string('email_address');
            $table->string('contact_no');
            $table->string('sister_company_name');
            $table->string('sister_image');
            $table->string('buyer_name');
            $table->string('buyer_image');
            $table->string('title_1');
            $table->string('title_2');
            $table->string('title_3');
            $table->string('title_4');
            $table->string('number_1');
            $table->string('number_2');
            $table->string('number_3');
            $table->string('number_4');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
