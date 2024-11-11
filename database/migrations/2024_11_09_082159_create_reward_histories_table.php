<?php

use App\Models\RewardHistory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
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
