<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','title','year','mileage',
        'price','description','status'
    ];

    public function images() { return $this->hasMany(CarImage::class); }
}
