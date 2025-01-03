<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auction extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad',
        'aciklama',
        'eser_id',
        'başlangıç_fiyatı',
        'anlık_fiyat',
        'kazanan_id',
        'başlangıç_tarihi',
        'bitiş_tarihi',
        'durum',
    ];

    public function work()
    {
        return $this->belongsTo(Work::class, 'eser_id');
    }

    public function winner()
    {
        return $this->belongsTo(User::class, 'kazanan_id');
    }
}
