<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum OrderEnum: string implements HasColor, HasLabel
{
    case Pending = "pending";
    case WaitingForChecking = "waiting_for_checking";
    case WaitingForCalculatingPrice = "waiting_for_calculating_price";
    case Rejected = "rejected";
    case Canceled = "canceled";
    case Done = "done";

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::WaitingForChecking => 'primary',
            self::WaitingForCalculatingPrice => 'primary',
            self::Canceled => 'danger',
            self::Rejected => 'danger',
            self::Done => 'success',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::WaitingForChecking => 'Menunggu Pengecekan ke Lokasi',
            self::WaitingForCalculatingPrice => 'Menunggu Perhitungan Harga',
            self::Canceled => 'Dibatalkan',
            self::Rejected => 'Ditolak',
            self::Done => 'Selesaikan',
        };
    }
}
