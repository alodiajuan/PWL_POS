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
        Schema::create('m_level', function (Blueprint $table) {
            $table->id('level_id'); // membuat kollom Primary Key dengan nama level_id yang AI
            $table->string('level_kode', 10) ->uniqe(); // membuat kolom lvel_kode dengan tipe data varchar(10) dan uniqe
            $table->string('level_nama', 50); // membuat kolom level_nama dengan tipe data varchar(100)
            $table->timestamps(); // membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_level');
    }
};
