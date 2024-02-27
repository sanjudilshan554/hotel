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
        'image_id',
        'hotel_id',
        'room_type_id'
    ];

    public function hotels(){
        return $this->hasOne(Hotel::class,'id','hotel_id');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }

    public function images(){
        return $this->hasOne(Image::class,'id','image_id');
    }
}
