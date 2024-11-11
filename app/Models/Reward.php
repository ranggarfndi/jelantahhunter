<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Reward extends Model
{
    use HasFactory;

    protected $guarded = [''];

    // Relasi dengan RewardHistory
    public function rewardHistories()
    {
        return $this->hasMany(RewardHistory::class);
    }
}
