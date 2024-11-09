<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RewardHistory extends Model
{
    /** @use HasFactory<\Database\Factories\RewardHistoryFactory> */
    use HasFactory;

    protected $guarded = [''];

    public function reward(): BelongsTo
    {
        return $this->belongsTo(Reward::class);
    }
}
