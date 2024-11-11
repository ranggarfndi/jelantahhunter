<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;  // Pastikan untuk mengimpor model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Menampilkan form penjemputan
    public function create()
    {
        return view('penjemputan');
    }

    // Menyimpan data penjemputan
    public function store(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'quantity' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'address_note' => 'nullable|string',
            'longtitude' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',
        ]);

        // Menyimpan data ke tabel orders
        $order = Order::create([
            'user_id' => auth()->id(),
            'quantity' => $request->quantity,
            'status' => 'pending',  // default status
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'address_note' => $request->address_note,
            'longtitude' => $request->longtitude,
            'latitude' => $request->latitude,
            'price' => null,  // bisa diisi ketika data dikonfirmasi
        ]);

        // Menambahkan quantity order ke total_sales pengguna
        $user = auth()->user();  // Ambil data pengguna yang sedang login
        $user->total_sales += $request->quantity;  // Menambahkan quantity ke total_sales
        $user->save();  // Simpan perubahan pada data pengguna

        // Redirect dengan pesan status
        return redirect()->route('penjemputan')->with('status', 'Penjemputan berhasil dibuat!');
    }
}