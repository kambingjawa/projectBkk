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
    Schema::create('info_alumni', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('subjudul')->nullable();
        $table->string('author');
        $table->string('gambar')->nullable();
        $table->text('deskripsi');
        $table->date('tanggal');
        $table->string('tags')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_alumni');
    }
};
