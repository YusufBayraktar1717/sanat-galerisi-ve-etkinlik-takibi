<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    protected $fillable = ['name','biyografi','dogum_Tarihi','olum_tarihi','foto_url','Milliyet','kayit_guncelleme_tarihi'];


    public function works()
    {
        return $this->hasMany(Work::class);
    }
}

