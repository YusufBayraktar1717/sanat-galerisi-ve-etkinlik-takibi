<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class user extends Model
{
    use HasFactory, Notifiable;


protected $table = 'users';

protected $fillable = [
    'kullaniciAdi',
    'email',
    'sifre',
    'telefon',



];
protected $hidden = [
    'sifre',
    'remember_token',
];
protected $casts = [
    'email_verified_at' => 'datetime'

];



    public function communications(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(communication::class);
    }

}

