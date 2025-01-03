<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{


    protected $table = 'works';

    protected $fillable = [
        'eser_isim',
        'yapildigi_yil',
        'kategori_id',
        'eser_gorseli_id',
        'sergilendigi_yer_id',
        'yapan_id'
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Category::class, 'kategori_id');

    }

    public function workImage()
    {
        return $this->belongsTo(WorkImage::class, 'eser_gorseli_id');
    }
    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class, 'sergilendigi_yer_id');
    }
public function artist(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
    return $this->belongsTo(Artist::class, 'yapan_id');
}
}
