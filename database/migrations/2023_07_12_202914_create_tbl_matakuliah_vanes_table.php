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
        Schema::create('tbl_matakuliah_vanes', function (Blueprint $table) {
            $table->id();
            $table->string('mkid', '15');
            $table->string('nama_mk', '15');
            $table->date('sks', '15');
            $table->string('semester', '15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_matakuliah_vanes');
    }
};
