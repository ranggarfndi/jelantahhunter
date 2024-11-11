<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $request->validate([
            'quantity' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'address_note' => 'nullable|string',
            'longtitude' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',
        ]);

        // Menyimpan data ke tabel orders
        Order::create([
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

        return redirect()->route('penjemputan')->with('status', 'Penjemputan berhasil dibuat!');
    }
}

