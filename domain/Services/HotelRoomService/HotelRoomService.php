<?php

namespace domain\Services\HotelRoomService;
use App\Models\HotelRooms;

class HotelRoomService {

    protected $hotel_room;

    public function __construct() {
        $this->hotel_room = new HotelRooms();
    }

    public function store($data,$url){
        
        $room_type = $data->input('room_type');
        $room_number= $data->input('room_number');
        $avilability= $data->input('avilability');
        $view= $data->input('view');
        $ameninies= $data->input('amenities');
        $hotel_id=$data->input('hotel_id');
        $room_type_id=$data->input('room_type_id');

        return $this->hotel_room->create([
         'room_type' => $room_type,
         'room_number'=> $room_number,
         'avilability'=> $avilability,
         'view'=> $view,
         'amenities'=> $ameninies,
         'url' => 'http://127.0.0.1:8000/' . $url,
         'hotel_id' => $hotel_id,
         'room_type_id'=> $room_type_id,
        ]);
    }

    public function update($requestId,$data,$url){
        
        $exist_hotel_room = $this->hotel_room->where('id',$requestId)->first();

        $room_type = $data->input('room_type');
        $room_number= $data->input('room_number');
        $avilability= $data->input('avilability');
        $view= $data->input('view');
        $ameninies= $data->input('amenities');
        $hotel_id=$data->input('hotel_id');
        $room_type_id=$data->input('room_type_id');

        $exist_hotel_room->update([
         'room_type' => $room_type,
         'room_number'=> $room_number,
         'avilability'=> $avilability,
         'view'=> $view,
         'amenities'=> $ameninies,
         'url' => 'http://127.0.0.1:8000/' . $url,
         'hotel_id' => $hotel_id,
         'room_type_id'=> $room_type_id,
        ]);

        return $exist_hotel_room;
    }

    public function get($hotelId){
        return $this->hotel_room->where('hotel_id',$hotelId)->get();
    }

    public function count(){
        return $this->hotel_room->count();
    }
}