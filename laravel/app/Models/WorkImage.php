<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{
    use HasFactory;

    protected $fillable = ['dosya_yolu'];

    public function works()
    {
        return $this->hasOne(Work::class, 'eser_gorseli_id');
    }
}
