<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'events';
    protected $fillable =['ad','aciklama','baslangic_tarihi','bitis_tarihi'];

}
