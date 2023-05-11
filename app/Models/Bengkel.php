<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'alamat',
        'jadwal'
    ];

    public function layanans()
    {
        return $this->hasMany(Layanan::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
