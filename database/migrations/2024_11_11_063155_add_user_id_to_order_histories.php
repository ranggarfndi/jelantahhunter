<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Menambahkan kolom user_id pada tabel order_histories
        Schema::table('order_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();  // Bisa diatur menjadi nullable jika pengguna bisa menghapus data order
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        // Menghapus kolom user_id jika migrasi dibatalkan
        Schema::table('order_histories', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
