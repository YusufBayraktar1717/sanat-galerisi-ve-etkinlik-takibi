<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Şehir adı gibi alanlar

    public function works()
    {
        return $this->hasMany(Work::class, 'sergilendigi_yer_id');
    }
}
