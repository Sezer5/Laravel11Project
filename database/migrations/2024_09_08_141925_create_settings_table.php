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
            $table->id()->autoIncrement();
            $table->string('title',150)->nullable();
            $table->text('keywords')->nullable();
            $table->string('description',150)->nullable();
            $table->string('company',150)->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',150)->nullable();
            $table->string('email',150)->nullable();
            $table->text('contact')->nullable();
            $table->text('aboutus')->nullable();
            $table->text('icon')->nullable();
            $table->text('status',5)->nullable()->default('False');
            $table->timestamps();
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
