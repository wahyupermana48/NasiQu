<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'phone',
        'harga',
        'jumlah',
        'image',
        'rek',
        'pesan',
        'status',
    ];

}
