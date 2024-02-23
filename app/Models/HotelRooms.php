<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type',
        'room_number',
        'avilability',
        'view',
        'amenities',
        'url',
        'hotel_id',
        'room_type_id'
    ];
}
