<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory;
    use HasApiTokens, Notifiable;
    protected $fillable = ['name', 'email', 'password', 'phone', 'role'];
    protected $hidden = ['password'];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function valuations()
    {
        return $this->hasMany(Valuation::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
