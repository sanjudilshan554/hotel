<?php

namespace domain\Services\HotelRoomService;
use App\Models\HotelRooms;

class HotelRoomService {

    protected $hotel_room;

    public function __construct() {
        $this->hotel_room = new HotelRooms();
    }

    public function store($data){
  
        if  ($data->hasfile('image')) {
            
            $profile_image = $data->File('image');
   
            if ($profile_image->isValid()) {
                $name_generation = hexdec(uniqid()); 
                $image_extention = strtolower($profile_image->getClientOriginalExtension());
                    
                if ($image_extention == 'png' || $image_extention == 'jpeg' || $image_extention == 'jpg') {
                    $image_name = $name_generation . '.' . $image_extention;
                    $upload_location = 'image/hotel_images/';
                    $url = $upload_location . $image_name;
                    $profile_image->move(public_path($upload_location), $image_name);
             
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
            }
        }
    }

    public function get($hotelId){
        return $this->hotel_room->where('hotel_id',$hotelId)->get();
    }
}