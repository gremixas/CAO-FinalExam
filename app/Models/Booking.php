<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
    ];

    public function car(): HasOne
    {
        return $this->hasOne(Car::class, 'id', 'car_id');
    }
    
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
