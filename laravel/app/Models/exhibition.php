<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exhibition extends Model
{

use HasFactory;

    protected $table = 'exhibitions';


    protected $fillable = [
        'sergi_adi',
        'sergi_aciklama',
        'baslangıc_tarihi',
        'bitis_tarihi',
        'sergi_yer_id',
        'durum',
    ];

    public function location()
    {
        return $this->belongsTo(City::class, 'sergi_yer_id');
    }
}
