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
        //
        Schema::create('dumy', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('fname');
            $table->string('class');
            $table->string('part');
            $table->string('email');
            $table->string('phone');
            $table->string('city');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
