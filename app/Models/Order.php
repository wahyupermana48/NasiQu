<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'qty',
        'address',
        'phone',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
