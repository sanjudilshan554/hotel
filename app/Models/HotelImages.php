<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'image_id',
        'hotel_id'
    ];

    public function hotels(){
        return $this->belongsTo(Hotel::class, 'id', 'hotel_id');
    }

    public function images(){
        return $this->hasOne(Image::class,'id','image_id');
    }
}
