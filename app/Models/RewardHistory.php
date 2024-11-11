<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RewardHistory extends Model
{
    use HasFactory;

    protected $guarded = [''];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan Reward
    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }
}
