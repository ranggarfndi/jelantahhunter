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
}
