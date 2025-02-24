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
    Schema::create('alternatives', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->float('lokasi');
        $table->float('harga_lahan');
        $table->float('kondisi_geografis');
        $table->float('lingkungan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatives');
    }
};
