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
    Schema::create('customers', function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('targetproduct')->nullable();
            $table->longText('detail')->nullable();
            $table->string('portfolio')->nullable();
            $table->integer('transactions')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**

    
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
