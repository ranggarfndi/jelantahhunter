<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderHistory extends Model
{
    /** @use HasFactory<\Database\Factories\OrderHistoryFactory> */
    use HasFactory;

    protected $guarded = [''];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    protected $fillable = ['order_id', 'user_id', 'title', 'message', 'quantity']; // pastikan 'user_id' ada di sini

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
