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
    Schema::table('order_histories', function (Blueprint $table) {
        $table->integer('quantity')->default(0); // Menambahkan kolom quantity
    });
}

public function down(): void
{
    Schema::table('order_histories', function (Blueprint $table) {
        $table->dropColumn('quantity'); // Hapus kolom quantity jika rollback
    });
}

};
