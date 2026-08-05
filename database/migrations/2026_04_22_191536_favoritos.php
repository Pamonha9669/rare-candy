<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('Favoritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->nullable()->index();
        });
    }

    public function down(): void
    {
      Schema::dropIfExists('Favoritos');
    }
};
