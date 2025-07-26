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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->nullable();

            $table->string('name', 100);
            $table->string('nik', 16)->unique();
            $table->string('phone', 20);
            $table->date('birth');
            $table->enum('darah', ['A', 'B', 'AB', 'O']);
            $table->text('address');

            $table->string('pengcab', 100);
            $table->string('pengprov', 100);
            $table->text('prestasi')->nullable();

            $table->string('qr_code');
            $table->string('image')->nullable(); // nama file foto
            $table->string('ktp')->nullable();   // nama file KTP (pdf)
            $table->string('kta')->nullable();   // nama file KTA (pdf)
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
