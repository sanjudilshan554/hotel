<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price_range',
        'max_occupancy',
        'bed_step',
        'extra',
    ];

    public function rooms(){
        return $this->hasMany(HotelRooms::class,'room_type_id','id');
    }
}
