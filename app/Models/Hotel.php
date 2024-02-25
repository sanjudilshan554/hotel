<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HotelType;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'contact_1',
        'contact_2',
        'type',
        'web_site',
        'city',
        'check_in_date',
        'check_out_date',
        'description',
        'hotel_type_id'
    ];

    public function hotelType()
    {
        //opposit of the has one 
        return $this->belongsTo(HotelType::class, 'hotel_type_id', 'id');
    }

    public function hotelRooms(){
        return $this->hasMany(HotelRooms::class,'hotel_id','id');
    }

    public function hotelImages(){
        return $this->hasMany(HotelImages::class,'hotel_id','id');
    }
}
