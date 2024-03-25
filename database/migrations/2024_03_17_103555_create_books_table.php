<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
     {
         Schema::create('books', function (Blueprint $table) {
             $table->integer('id');
             $table->string('name');
             $table->string('mail');
             $table->string('password');
             $table->integer('age');
             $table->string('location');
         });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
