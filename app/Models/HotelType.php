<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;

class HotelType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price_range',
        'max_occupancy',
        'amenities',
        'extra',
    ];

    public function hotels(){
        return $this->hasMany(Hotel::class, 'hotel_type_id', 'id');
    }

}
