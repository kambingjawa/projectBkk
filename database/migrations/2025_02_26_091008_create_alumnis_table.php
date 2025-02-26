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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('jurusan');
            $table->integer('tahun_lulus');
            $table->string('status');
            $table->string('profesi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('lokasi_kerja')->nullable();
            $table->string('gaji_kerja')->nullable();
            $table->text('alasan_kerja')->nullable();
            $table->string('kampus')->nullable();
            $table->string('jurusan_kuliah')->nullable();
            $table->string('lokasi_kuliah')->nullable();
            $table->text('alasan_kuliah')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('lokasi_wirausaha')->nullable();
            $table->string('gaji_wirausaha')->nullable();
            $table->text('alasan_wirausaha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
