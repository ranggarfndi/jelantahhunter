<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Models\OrderHistory;
use Illuminate\Http\Request;
use App\Models\RewardHistory;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    // Menampilkan halaman hadiah
    public function index()
    {
        $reward = Reward::first(); // Sesuaikan hadiah yang ingin ditampilkan
        return view('hadiah', compact('reward'));
    }

    // Fungsi untuk menukar hadiah
    public function exchange($id)
    {
        $reward = Reward::findOrFail($id); // Ambil data reward berdasarkan ID
        $user = auth()->user();

        // Cek apakah user memenuhi syarat untuk menukar hadiah
        $totalSales = $user->orderHistories()->sum('quantity'); // Mengambil total penjualan user

        if ($totalSales >= $reward->price && $reward->quantity > 0) {
            // Kurangi stok hadiah
            $reward->quantity -= 1;
            $reward->save();

            // Menambahkan record baru di reward_histories (sejarah penukaran hadiah)
            // Pastikan tabel reward_histories sudah ada dan memiliki relasi yang benar dengan reward dan user
            $reward->rewardHistories()->create([
                'user_id' => $user->id,
                'status' => 'success', // Status penukaran
            ]);

            // Kurangi jumlah penjualan user (total_sales)
            $user->total_sales -= $reward->price;
            $user->save();

            return redirect()->route('hadiah')->with('status', 'Hadiah berhasil ditukarkan!');
        }

        return redirect()->route('hadiah')->with('error', 'Tidak memenuhi syarat untuk menukar hadiah.');
    }
}
